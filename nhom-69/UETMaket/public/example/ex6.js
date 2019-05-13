var express = require('express');
var app= express();
var bodyparser = require('body-parser');
var urlencode = bodyparser.urlencoded({extended:false})
//http://localhost:7777/post
app.post('/post',urlencode, function(req, res) {
  var respon = {
      firstname: req.body.firstname,
      lastname:req.body.lastname
  };
  console.log("done")
  res.end(JSON.stringify(respon));
})

var sever= app.listen(7777, function() {
    console.log("connected");
})