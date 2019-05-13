// Call Module Express
var express = require('express');
var bodyParser = require('body-parser');
var app = express();
var url = bodyParser.urlencoded({extended: false});
app.set('view engine', 'ejs');
app.use(express.static('stuff'));
app.get('/', function(req, res) {
    res.render('index');
});
app.listen(8087);

