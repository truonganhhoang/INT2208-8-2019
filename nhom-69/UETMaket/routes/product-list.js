var express = require('express');
var router = express.Router();

router.get('/', function(req, res, next) {
        res.render('Product-list', {title: "List"});
    
});
module.exports= router;