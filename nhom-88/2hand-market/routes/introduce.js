var express = require('express');
var router = express.Router();

var itemsModel = require('./../schemas/items');

const paramsHelper = require('./../helper/params');
const utilsHelper = require('./../helper/utils');


/* GET home page. */
router.get('/', function (req, res, next) {
    let condition = {};
   
    let currentStatus = paramsHelper.getParams(req.params, 'status', '');
  
    let statusFilter = utilsHelper.createFilterStatus(currentStatus);
    

    itemsModel.find(condition)
    .then((items) => {
        res.render('page/introduce/index', {
        title: 'clover_shop',
        items,
        statusFilter,
        currentStatus
      });
    });
});

module.exports = router;