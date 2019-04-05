var passport= require('passport');
var User= require('../models/user');
var localStratepy = require('passport-local').Strategy;

passport.serializeUser(function(user,done ) { // hàm đc gọi khi xác thực thành công lưu dl vào sesion
    done(null, user.id);
});

passport.deserializeUser(function(id, done) { // gọi bới re1.session cho phép lấy dữ liệu từ đó ra
    
    User.findById(id, function(err,user) {
        done(err,user);
    });
});

passport.use('local.signup', new localStratepy({
  
    usernameField: 'email',
    passwordFiels: 'password',
    passReqToCallback:true
},function(req, email, password, done) {
    User.findOne({'email': email}, function(err,user) {
        if(err) { return done(err)};
        if(user) {
            return done(null, false, {message: 'Email is already'});
        }
      
        var newUser= new User();
        newUser.email= email;
        newUser.password= newUser.encryptPass(password);
        newUser.save(function(err,result ) {
            if(err) { return done(err)}
            return done(null, newUser, {message: 'Ok'});
        })
    })
}));