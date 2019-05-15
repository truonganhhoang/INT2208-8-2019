var createError = require("http-errors");
var express = require("express");
var path = require("path");
var cookieParser = require("cookie-parser");
var logger = require("morgan");
const flash = require("connect-flash");
const validator = require("express-validator");
var indexRouter = require("./routes/index");
var usersRouter = require("./routes/user");
var gamesRouter = require("./game-api/routes/game");
var ranksRouter = require("./rank-api/routes/rank");

var app = express();

// view engine setup
app.engine("ejs", require("ejs-locals"));
app.set("views", path.join(__dirname, "views"));
app.set("view engine", "ejs");

app.use(logger("dev"));
app.use(express.json());
app.use(express.urlencoded({ extended: true }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, "public")));

//Import them vao
var passport = require("passport");
var session = require("express-session");
var bodyParser = require("body-parser");

//for bodyParser
app.use(
  bodyParser.urlencoded({
    extended: true
  })
);
app.use(bodyParser.json());

// For Passport
//check sign up
app.use(validator());
app.use(flash());
app.use(
  session({ secret: "keyboard cat", resave: true, saveUninitialized: true })
); // session secret
app.use(passport.initialize());
app.use(passport.session()); // persistent login sessions
//nhap modul dotenv de xu li bien moi truong
var env = require("dotenv").load();

//Models
var models = require("./models");

//Sync Database
models.sequelize
  .sync()
  .then(function() {
    console.log("Nice! Database looks fine");
  })
  .catch(function(err) {
    console.log(err, "Something went wrong with the Database Update!");
  });

require("./config/passport")(passport, models.user, models.userdetails);

//routes
app.use("/", indexRouter);
app.use("/user", usersRouter);
app.use("/games", gamesRouter);
app.use("/user", ranksRouter);

// catch 404 and forward to error handler
app.use(function(req, res, next) {
  next(createError(404));
});

app.use((req, res, next) => {
  res.locals.login = req.isAuthenticated();
  res.locals.session = req.session;
  next();
});


// error handler
app.use(function(err, req, res, next) {
  // set locals, only providing error in development
  res.locals.message = err.message;
  res.locals.error = req.app.get("env") === "development" ? err : {};

  // render the error page
  res.status(err.status || 500);
  res.render("error");
});

module.exports = app;
