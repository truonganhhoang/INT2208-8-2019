var express = require('express');
var router = express.Router();

/* GET home page. */

router.use('/danh-muc-san-pham', require('./home'));
router.use('/gio-hang', require('./cart'));
router.use('/dang-tin-mien-phi', require('./post-news'));
router.use('/', require('./introduce'));

module.exports = router;
