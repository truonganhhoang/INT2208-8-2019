
// để ý phiên bản của các phiên bản của các API trong npm để chú ý cách sd
var createError = require('http-errors');
var express = require('express');
var path = require('path');
var favicon = require('serve-favicon');
var cookieParser = require('cookie-parser');
//var csrf= require('csurf');
var bodyParser= require('body-parser');
var logger = require('morgan');
var mongoose= require('mongoose');
var session = require('express-session');
var passport= require('passport'); // chứng thực sign in
const localStrategy = require('passport-local').Strategy;
var flash= require('connect-flash'); 
var validator= require('express-validator');



var Router= require('./routes/router');
var HBSexpress= require('express-handlebars');
var MongoStore= require('connect-mongo')(session);
//var csrfProtection = csrf({ cookie: true })
//var parseForm = bodyParser.urlencoded({ extended: false })
var urlencodedParser = bodyParser.urlencoded({ extended: true });
var app = express();

mongoose.connect('mongodb+srv://ThanhQuy:2911thanhquyxinhgai@cluster0-f5ii6.mongodb.net/test', /* từ phiên bản >= 3.0 */ { useNewUrlParser: true });
mongoose.Promise = global.Promise;
var db = mongoose.connection;
db.on('error', console.error.bind(console, 'MongoDB connection error:'));
require('./config/passport');

app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'hbs');
//mongodb+srv://ThanhQuy:<password>@cluster0-f5ii6.mongodb.net/test
app.use(logger('dev'));
app.use(bodyParser.json()); // parser: trình phân tích cú pháp
app.use(bodyParser.urlencoded({ extended: false }));
app.use(validator()); // bắt buộc phải đứng sau bodyparder
app.use(cookieParser());
app.use(session({ // bắt buộc sau body và cookie: là 1 phiên llamf việc
  secret:"Super secret",
  resave: false,
  saveUninitialized: false,
  store: new MongoStore ({mongooseConnection: mongoose.connection }),
}));
app.use(flash());

app.use(function (req, res, next) { // bắt buộc phải có để cài đặt 1 flash chạy trên app, chỉ cài reeng trên router là chưa đủ
  req.flash('info', 'hello!');
  next();
})
app.use(passport.initialize());
app.use(passport.session()) // lấy thông tin user gán vào req.user

app.use(express.urlencoded({ extended: false }));
app.use(express.json());
app.use(express.static(path.join(__dirname, 'public')));
 

 
// set .html as the default extension



app.use(function(req, res, next) {
  res.locals.login=req.isAuthenticated();
  res.locals.session= req.session;
  next();
})

app.use('/', Router);



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
})

   

module.exports = app;
