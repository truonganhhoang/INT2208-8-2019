var express= require('express');
var app= express();

app.get('/', function(req, res) {
    req.accepts('text/html');
    res.send(req.query)
});
var server=app.listen(7000, function() {
    console.log("connected")
});