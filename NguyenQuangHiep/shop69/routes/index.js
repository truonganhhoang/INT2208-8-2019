var express = require('express');

var index_controllers = require('../controllers/index.controllers');


var router = express.Router();


/* GET home page. */
router.get('/', index_controllers.home);

router.get('/add/:productId', index_controllers.add);

router.post('/add/:productId', index_controllers.add);

router.get('/delete/:productId', index_controllers.delete);

router.post('/delete/:productId', index_controllers.delete);

router.get('/tim-kiem', index_controllers.get_search);

router.get('/shoes', index_controllers.shoes);
module.exports = router;
