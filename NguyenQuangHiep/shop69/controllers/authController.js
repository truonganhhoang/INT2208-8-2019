var passport = require('passport');

exports.get_dashboard = function(req, res, next) {
    res.render('backend/dashboard', {
        pageTitle: req.__('Administrator Panel'),
        layout: false
    });
};

exports.get_logout = function(req, res, next) {
    req.logout();
    res.redirect('/backoffice/login');
};

exports.login_get = function(req, res, next) {
    var messages = req.flash('error');
    res.render('backend/layout_login', {
        pageTitle: req.__('Administrator Login'),
        csrfToken: req.csrfToken(),
        messages: messages,
        hasErrors: messages.length > 0,
        layout: false
    });
};

exports.login_post = passport.authenticate('backend.login', {
    successRedirect: '/backoffice',
    failureRedirect: '/backoffice/login',
    badRequestMesseage: 'Please input all fields required.',
    failureFlash: true
});

exports.notLogin_use = function(req, res, next) {
    next();
};

exports.isLoggedIn = function(req, res, next) {
    if (req.user && req.user.roles === "ADMIN" && req.user.provider === "backend") {
        return next();
    } else {
        return res.redirect('/backoffice/login');
    }
};

exports.notLoggedIn = function(req, res, next) {
    if (!req.user) {
        return next();
    } else {
        if (req.user && req.user.roles !== "ADMIN" && req.user.provider !== "backend") {
            return next();
        } else {
            return res.redirect('/backoffice');
        }
    }
}