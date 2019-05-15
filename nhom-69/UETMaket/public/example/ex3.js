var express = require('express');
var app= express();
//http://hostlocal:7777/abc
app.get('/abc', function(req, res) {
  var respon = {
      firstname: req.query.firstname,
      lastname:req.query.lastname
  };
  console.log("done")
  res.end(JSON.stringify(respon));
})

var sever= app.listen(7777, function() {
    console.log("connected");
})