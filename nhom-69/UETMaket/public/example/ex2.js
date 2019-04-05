var express = require('express');
var app= express();

app.get('/', function(req, res) {
   res.sendFile(__dirname+ "/ex4.html")
})

var sever= app.listen(7077, function() {
    console.log("connected");
})