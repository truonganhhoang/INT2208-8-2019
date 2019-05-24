var express = require('express');
var index_controllers = require('../controllers/index.controllers');
var passport = require('passport');
var LocalStrategy = require('passport-local').Strategy;
var UserSchema = require('../models/UserSchema');
var passport_config = require('../configs/passport.configs');

var router = express.Router();

/* GET users listing. */



router.get('/dang-nhap', index_controllers.get_login);

router.post('/dang-nhap', passport.authenticate('local-login', {
    successRedirect: '/',
    failureRedirect: '/users/dang-nhap',
    failureFlash: true
}))

router.get('/gio-hang', index_controllers.get_cart);
router.get('/dang-xuat', index_controllers.get_logout);

router.get('/dang-ky', index_controllers.get_register);

router.get('/ho-so', index_controllers.get_profile);

// Passport register
router.post('/dang-ky', passport.authenticate('local-register', {
    successRedirect: '/',
    failureRedirect: '/users/dang-ky',
    failureFlash: true
}));

passport_config.serializeUser;
passport_config.deserializeUser;
passport_config.register;
passport_config.login;


module.exports = router;
