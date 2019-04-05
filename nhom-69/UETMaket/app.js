var createError = require('http-errors');
var express = require('express');
var path = require('path');
var cookieParser = require('cookie-parser');
//var csrf= require('csurf');
var bodyParser= require('body-parser');
var logger = require('morgan');
var mongoose= require('mongoose');
var session = require('express-session');
var passport= require('passport'); // chứng thực sign in
const localStrategy = require('passport-local').Strategy;
var flash= require('connect-flash');


var indexRouter = require('./routes/cook');
var usersRouter = require('./routes/users');
var loginRouter= require('./routes/login');
var ListRouter= require('./routes/product-list')
var HBSexpress= require('express-handlebars');
var MongoStore= require('connect-mongo')(session);
//var csrfProtection = csrf({ cookie: true })
//var parseForm = bodyParser.urlencoded({ extended: false })
var urlencodedParser = bodyParser.urlencoded({ extended: false });
var app = express();

mongoose.connect('mongodb://localhost:27017/UETMarket', /* từ phiên bản >= 3.0 */ { useNewUrlParser: true });

require('./config/passport');

app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'hbs');

app.use(logger('dev'));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(session({
  secret:"Super secret",
  resave: false,
  saveUninitialized: true,
  store: new MongoStore ({mongooseConnection: mongoose.connection }),
  cookie: { secure:true }
}));
app.use(flash());
app.use(passport.initialize());
app.use(passport.session()) // lấy thông tin user gán vào req.user
app.use(express.urlencoded({ extended: false }));
app.use(express.json());
app.use(express.static(path.join(__dirname, 'public')));

app.use('/', indexRouter);
app.use('/users', usersRouter);
app.use('/login', loginRouter);
app.use('/list', ListRouter);
  
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
