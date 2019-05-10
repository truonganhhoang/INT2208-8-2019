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