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
//--------------------------------------SIGN up------------------------------------
passport.use('local.signup', new localStratepy({
  
    usernameField: 'email',
    passwordFiels: 'password',
    passReqToCallback :true,
},function(req, email, password, done) {
    User.findOne({'email': email}, function(err,user) {
        if(err) { return done(err)};
        if(user) {
            return done(null, false,  {message:'Email đã được sử dụng, vui lòng chọn email khác'});
        }
        var newUser= new User();
        newUser.email= email;
        newUser.password= newUser.encryptPass(password);
        newUser.name= req.body.name;
        newUser.number=req.body.number;
        newUser.save(function(err,result ) {
            if(err) { return done(err)}
            return done(null, newUser);
        })
    })
}));

//--------------------------------------SIGN IN------------------------------------
passport.use('local.signin', new localStratepy({
    usernameField: 'email',
    passwordField: 'password',
    passReqToCallback: true
}, function(req, email, password, done) {
    User.findOne({'email': email}, function(err, user) {
        if(err) {    console.log('err'); return done(err)};
        if(!user) {   console.log('1'); return done(null, false, { message:'Tài khoản đăng nhập không tồn tai xin vui lòng thử lại.'})};
        if(!user.validPass(password)) {   console.log('2');return done(null, false,  {message:'Mật khẩu không hợp lệ'})};
        console.log('ok');
        return(done(null, user));
        
    })
}))