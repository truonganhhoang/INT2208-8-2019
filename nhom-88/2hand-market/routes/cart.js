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

  //console.log(products);
   // a document instance
   var bill = new ordersModel({
    customer : {
      name: req.body.InputName,
      city: req.body.InputCity,
      address: req.body.InputDistrict,
      email: req.body.InputEmail,
      phoneNumber: req.body.InputPhoneNumber,
    },
    product: products
   });
 
   // save model to database
   bill.save(function (err, bill) {
     if (err) return console.error(err);
     console.log(" saved to bookstore collection.");
   });

   //send email
   var transporter = nodemailer.createTransport({
    service: 'gmail',
    auth: {
      user: 'marketWeb1512@gmail.com',
      pass: '2handMarket@2'
    }
  });
  
  var mailOptions = {
    from: 'marketWeb1512@gmail.com',
    to: req.body.InputEmail,
    subject: 'Xác nhận đơn đặt hàng',
    html: html
  };
  
  transporter.sendMail(mailOptions, function(error, info){
    if (error) {
      console.log(error);
    } else {
      console.log('Email sent: ' + info.response);
    }
  });

  res.end("chúng tôi đã gửi mail xác nhận và hóa đơn cho bạn vào email. Hãy kiểm tra hòm thư của mình!!!");

});
module.exports = router;