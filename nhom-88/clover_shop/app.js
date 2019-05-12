var createError = require('http-errors');
var express = require('express');
var path = require('path');
var cookieParser = require('cookie-parser');
var logger = require('morgan');

//var indexRouter = require('./routes/index');
//var usersRouter = require('./routes/users');
var expressLayouts = require('express-ejs-layouts');
var mongoose = require('mongoose');

var app = express();
//


//connect database
mongoose.connect('mongodb+srv://ngoc123:ngoc123@cluster0-hqv14.mongodb.net/2hand_market?retryWrites=true');
var db = mongoose.connection;
db.on('error', ()=>{
  console.log('connection error:');
});
db.once('open', () => {
  console.log('connected');
  // we're connected!
});
//PATH

global.__base = __dirname + '/';
global.__pathPublic = global.__base + 'public' + '/';
global.__pathUploads = __pathPublic + 'img' + '/';

// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');
app.use(expressLayouts);
app.set('layout', 'backend');

app.use(logger('dev'));
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));

app.use('/', require('./routes/index'));


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
  res.render('page/error', {title: 'ERROR PAGE'});
});

module.exports = app;
