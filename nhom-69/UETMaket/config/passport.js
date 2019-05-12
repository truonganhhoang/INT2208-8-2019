var passport= require('passport');
var User= require('../models/user');
var Admin= require('../models/admin');
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
        if(req.body.password.length<6) {
            return done(null, false,  {message:'Mật khẩu phải dài hơn 6 kí tự'});
        }
        var newUser= new User();
        newUser.email= email;
        newUser.password= newUser.encryptPass(password);
        newUser.name= req.body.name;
        newUser.number=req.body.number;
        message='';
        newUser.save(function(err,result ) {
            if(err) { return done(err)}
            return done(null, newUser,{name:req.body.name , number:req.body.number, id: newUser.id});
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
        if(!user.validPass(password)) { return done(null, false,  {message:'Mật khẩu không hợp lệ'})};
        
        return(done(null, user, {name: user.name, number:user.number,id: user.id}));
        
    })
}))
//--------------------admin-----------------------
passport.use('admin.signin', new localStratepy({
    usernameField: 'email',
    passwordField: 'password',
    passReqToCallback: true
}, function(req, email, password, done) {
    Admin.findOne({'email': email}, function(err, admin) {
        if(err) {    console.log('err'); return done(err)};
        if(!admin) {  console.log('1'); return done(null, false, { message:'Tài khoản đăng nhập không tồn tai xin vui lòng thử lại.'})};
        if(!admin.validPass(password)) { return done(null, false,  {message:'Mật khẩu không hợp lệ'})};
        
        return(done(null, admin, {namead: admin.number}));
        
    })
}))