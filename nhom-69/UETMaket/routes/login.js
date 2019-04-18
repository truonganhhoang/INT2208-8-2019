var express = require('express');
var router = express.Router();
var cookieParser = require('cookie-parser');
var csrf= require('csurf');
var bodyParser= require('body-parser');
var passport= require('passport');
var Product= require('../models/product');
var Cart= require('../models/cart');



var csrfProtection = csrf({ cookie: true });
var parseForm = bodyParser.urlencoded({ extended: false });

// load login
router.get('/login', csrfProtection, function(req, res, next) {
  res.render("login",{csrfToken: req.csrfToken() }) ;
});
// load khi đăng nhập thành công
router.get('/ok', csrfProtection, function(req, res, next) {
  res.render("loginOk") ;
});
router.post('/signup',  parseForm, csrfProtection,function(req, res, next) {
passport.authenticate('local.signup',function(err, user, info) {
  if (err) {
    return next(err); // will generate a 500 error
  }
  if (!user) { //ko có user tồn tại trả về
    return res.status(409).render('login', {csrfToken: req.csrfToken(),messages1: info.message}); // khi mà có user tồn tại
  }
  return res.status(302).redirect('/ok'); // đúng thì chuyển hướng

})(req, res, next);
});
router.post('/signin',  parseForm, csrfProtection,function(req, res, next) {
  passport.authenticate('local.signin',function(err, user, info) {
    if (err) {
      return next(err); // will generate a 500 error
    }
    if (!user) {
      return res.status(409).render('login', {csrfToken: req.csrfToken(),messages: info.message}); // khi mà có user tồn tại, tạo csrf mới
    }
    return res.status(302).redirect('/ok'); // đúng thì chuyển hướng
  })(req, res, next);
  });

  router.get('/', function(req, res, next) {
    Product.find(function(err,docs){ // hàm trả về 1 biến lỗi và 1 biến kết quả
      var productinfo= [];
      var numerinfor=3;
      for(var i=0;i<docs.length;i+= numerinfor) {
        productinfo.push(docs.slice(i,i+numerinfor));
      }
      res.render('Mainpage', { title: 'UETMarket', products: productinfo });
    });
    
  });


  router.get('/add-to-cart/:id', function(req, res, next) {
      var productId= req.params.id;
      x= req.session.cart ? 0 :1;
      console.log(x);
      var cart= new Cart(req.session.cart ? req.session.cart : {});
      Product.findById(productId, function(err, product) { // tìm sản phẩm theo id
        if(err) {
          return res.redirect('/');
        }
        
        cart.add(product, product.id); // add sản phẩm vs id đó theo hàm add trong cart.js
        req.session.cart=cart; // gán danh sách sản phẩm chọn của phiên làm việc này là cart
        console.log(req.session.cart);
        res.redirect('/'); // chuyển hướng
      });
  
  });
module.exports = router;
