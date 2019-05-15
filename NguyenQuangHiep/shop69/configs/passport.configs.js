var passport = require('passport');
var LocalStrategy = require('passport-local').Strategy;
var UserSchema = require('../models/UserSchema');




module.exports.serializeUser =  passport.serializeUser(function(user, done) {
    done(null, user.id);
});

module.exports.deserializeUser = passport.deserializeUser(function(id, done) {
    UserSchema.findById(id, function(err, user) {
        done(err, user);
    });
});




module.exports.register = passport.use('local-register', new LocalStrategy(
    {
        usernameField: 'email',
        passwordField: 'password',
        passReqToCallback: true
    },
    function(req, email, password, done) {
            UserSchema.findOne({
                'email': email
            }, function(err, user) {
                console.log(email);
                if (err) return done(err);
                if (user) {

                    return done(null, false, {
                        message: 'Email này đã tồn tại, vui lòng sử dụng email khác.'
                    });
                } else {
                    var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;

                    if (vnf_regex.test(req.body.phonenumber) == false) {
                        return done(null, false, {
                            message: 'Số điện thoại không đúng định dạng, vui lòng thử lại'
                        });
                    }
                    if (password !== req.body.passwordconf) {
                        return done(null, false, {
                            message: 'Mật khẩu xác nhận không chính xác, vui lòng thử lại.'
                        });
                    }
                    if (password.length < 6 || password.length > 30) {
                        return done(null, false, {
                            message: 'Mật khẩu phải có độ dài lớn hơn 6 và nhỏ hơn 30, vui lòng thử lại.'
                        });
                    }
                    

                    UserSchema.findOne({
                        'phonenumber': req.body.phonenumber
                    }, function(err, data) {
                        if (err) return done(err);
                        if (data) {
                            return done(null, false, {
                                message: 'Số điện thoại này đã tồn tại, vui lòng sử dụng số điện thoại khác.'
                            });
                        }
                    })

                    var userData = new UserSchema();
                    userData.email = email;
                    userData.username = req.body.username;
                    userData.phonenumber = req.body.phonenumber;
                    userData.password = userData.generateHash(password);
                    userData.cart = [];

                    userData.save(function(err) {
                        if (err) throw err
                        return done(null, userData);
                    })
                }
            })
        
    }

));


module.exports.login = passport.use('local-login', new LocalStrategy({
    usernameField: 'username',
    passwordField: 'password',
    passReqToCallback: true
}, function(req, email, password, done) {
    UserSchema.findOne({
        'email': email
    }, function(err, user) {
        if (err) {
            return done(err);
        }

        if (!user) {
            return done(null, false, {
                message: 'Tài khoản này không tồn tại, vui lòng kiểm tra lại.'
            });
        } else if (!user.validPassword(password)){
            return done(null, false, {
                message: 'Mật khẩu không chính xác, vui lòng kiểm tra lại.'
            });
        } else if (user.validPassword(password)){
            return done(null, user);
        }



            
    });
}));


