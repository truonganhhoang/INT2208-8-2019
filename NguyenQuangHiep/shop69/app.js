var createError = require('http-errors');
var express = require('express');
var path = require('path');
var cookieParser = require('cookie-parser');
var logger = require('morgan');
var mongoose = require('mongoose');
var passport = require('passport');
var session = require("express-session");
var flash = require('connect-flash');

var exphbs  = require('express-handlebars');
var bodyParser = require('body-parser');

var databaseconfig = require('./configs/database.configs');

var indexRouter = require('./routes/index');
var usersRouter = require('./routes/users');

// var product = require('./routes/upload');
// mình chỉ chia nhỏ nó ra thôi
// ngon rồi



var app = express();
mongoose.connect(databaseconfig.url);

// view engine setup
// app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'hbs');

app.engine('hbs', exphbs({defaultLayout: 'layout', extname: 'hbs'}));
app.use(express.static(path.join(__dirname, 'public')));

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));
app.use(session({
  secret: 'secured_key',
  resave: false,
  saveUninitialized : false
}));

app.use(passport.initialize());
app.use(passport.session());
app.use(flash());

app.use(logger('dev'));
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(cookieParser());


app.use('/', indexRouter);
app.use('/users', usersRouter);




// catch 404 and forward to error handler
app.use(function(req, res, next) {
  next(createError(404));
});

// error handler
app.use(function(err, req, res, next) {
  // set locals, only providing error in development
  res.locals.message = err.message;
  res.locals.error = req.app.get('env') === 'development' ? err : {};

  // render the error page
  res.status(err.status || 500);
  res.render('error');
});

module.exports = app;
