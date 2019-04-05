var express = require('express');
var router = express.Router();
var cookieParser = require('cookie-parser');
var csrf= require('csurf');
var bodyParser= require('body-parser');
var passport= require('passport');
var csrfProtection = csrf({ cookie: true });
var parseForm = bodyParser.urlencoded({ extended: false });

router.get('/', csrfProtection, function(req, res, next) {
  var message= req.flash('error');
  res.render("login",{ csrfToken: req.csrfToken(), message: message, hasError: message.length>0}) ;
});
router.get('/ok', csrfProtection, function(req, res, next) {
  res.render("loginOK") ;
});
router.post('/',  parseForm, csrfProtection,passport.authenticate('local.signup',{
  successRedirect: '/login/ok',
  failureRedirect:  '/login',
  failureFlash: true
}));
module.exports = router;
