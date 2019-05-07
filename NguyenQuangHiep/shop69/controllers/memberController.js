var passport = require('passport');

exports.get_regsiter = function(req, res, next) {
    var messages = req.flash('error');
    res.render('frontend/member/register', {
        pageTitle: req.__('Member Register'),
        csrfToken: req.csrfToken(),
        messages: messages,
        hasErrors: messages.length > 0
    });
};

// POST Register
exports.post_regsiter = passport.authenticate('local.regsiter', {
    successRedirect: '/thanh-vien/tai-khoan',
    failureRedirect: '/thanh-vien/dang-ky',
    failureFlash: true
});

// GET Profile
exports.get_profile = function(req, res, next) {
    res.render('frontend/member/dashboard', {
        pageTitle: req.__('Dashboard')
    });
};

// GET Login
exports.get_login = function(req, res, next) {
    var messages = req.flash('error');
    res.render('frontend/member/login', {
        pageTitle: req.__('Member Login'),
        csrfToken: req.csrfToken(),
        messages: messages,
        hasErrors: messages.length > 0
    });
};

exports.get_logout = function(req, res, next) {
    req.logout();
    res.redirect('/');
};

// GET Login
exports.post_login = passport.authenticate('local.login', {
    successRedirect: '/thanh-vien/tai-khoan',
    failureRedirect: '/thanh-vien/dang-nhap',
    failureFlash: true
});

// GET Facebook login
exports.get_facebook_login = passport.authenticate('facebook', {
    scope: ['email, public_profile']
});

// GET Facebook login
exports.get_facebook_login_callback = passport.authenticate('facebook', {
    successRedirect: '/thanh-vien/tai-khoan',
    failureRedirect: '/thanh-vien/dang-nhap'
});

// GET Google login
exports.get_google_login = passport.authenticate('google', {
    scope: ['email', 'profile']
});

// GET Google login
exports.get_google_login_callback = passport.authenticate('google', {
    successRedirect: '/thanh-vien/tai-khoan',
    failureRedirect: '/thanh-vien/dang-nhap'
});

exports.isLoggedIn = function(req, res, next) {
    if (req.isAuthenticated()) {
        return next();
    }
    res.redirect('/thanh-vien/dang-nhap');
};

exports.notLoggedIn = function(req, res, next) {
    if (!req.isAuthenticated()) {
        return next();
    }
    res.redirect('/thanh-vien/tai-khoan');
};

exports.notLogin_use = function(req, res, next) {
    next();
};