var express = require('express');
var router = express.Router();

var ordersModel = require('./../schemas/orders');

var nodemailer = require('nodemailer');

/* GET home page. */
router.get('/', function (req, res, next) {
  res.render('page/cart/index', {
    title: 'giỏ hàng',
  });
});
router.post('/save', function(req, res, next) {
  //console.log(req.body);
  let a = JSON.parse(req.body.cart);
  let products = [];
  let html = '<h4>Bạn đã đặt hàng thành công tại 2hand-market</h4><p>Cảm ơn bạn đã ủng hộ 2hand-market!!! Hi vọng bạn sẽ có những trải nghiệm tốt tại hệ thống cửa hàng</p><p>Đơn hàng của bạn</p><table> <thead> <tr> <th>sản phẩm</th><th>thành tiền</th></tr></thead><tbody>';
  for(let i=0; i<a.length; i++){
    let prd = {
      product_id: a[i].id,
      Qty: a[i].Qty 
    };
    products.push(prd);
    html += '<tr><td>' + a[i].Product + " (x" + a[i].Qty + ")" + "</td><td>" + a[i].Qty * a[i].Price + "đ</td>";
  }