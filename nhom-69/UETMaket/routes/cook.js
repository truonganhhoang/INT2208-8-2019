/*var express = require('express');
var router = express.Router();
var Product= require('../models/product');
var Cart= require('../models/cart');


/* GET home page. 
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

module.exports = router;*/
