var express = require('express');
var router = express.Router();
var multer = require('multer');
var path = require('path');

var itemsModel = require('./../schemas/items');
const fileHelper = require('./../helper/uploadimg');


/* GET home page. */
router.get('/', function (req, res, next) {
  res.render('page/post-news/index', {
    title: 'đăng tin miễn phí',
  });
});

var upload = fileHelper.uploadFile('photos', 4, 'articles', 20, 10, 'png|jpg');

router.post('/save', (req, res, next)=>{
  upload(req, res, function (err) {
    if (err instanceof multer.MulterError) {
      // A Multer error occurred when uploading.
    } else if (err) {
      // An unknown error occurred when uploading.
    }
    //req.files = JSON.parse(JSON.stringify(req.file));
    var link_img = [];
     for(let i=0; i< req.files.length; i++) {
      link_img.push('./img/articles/'+ req.files[i].filename);
     }

    let item = {
      name: req.body.topic,
      category: 'Đồ-cũ',
      type: ' ',
      status: 1,
      price: req.body.price,
      desc: req.body.content,
      link_img: link_img
    }

    new itemsModel(item).save().then(()=>{
      res.redirect('/dang-tin-mien-phi');
    });
  });
});

module.exports = router;
