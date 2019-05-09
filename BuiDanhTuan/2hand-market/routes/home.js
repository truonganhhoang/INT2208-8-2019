var express = require('express');
var router = express.Router();

var itemsModel = require('./../schemas/items');

const paramsHelper = require('./../helper/params');
const utilsHelper = require('./../helper/utils');

/* GET home page. */
router.get('(/:status)?', function(req, res, next) {

  let condition = {};
   
  let currentStatus = paramsHelper.getParams(req.params, 'status', '');

  let statusFilter = utilsHelper.createFilterStatus(currentStatus);

  let keyWord = paramsHelper.getParams(req.query, 'keyWord', '');

  let from = paramsHelper.getParams(req.query, 'from', '');
  let minPrice = parseInt(from.split(".").join(""));

  let to = paramsHelper.getParams(req.query, 'to', '');
  let maxPrice = parseInt(to.split(".").join(""));


  //pagination
  let pagination = {
    itemsTotal : 1,
    totalItemsPerPage : 5,
    currentPage: 1,
    pagesRange : 3
  }

  pagination.currentPage = parseInt(paramsHelper.getParams(req.query,'page', 1));

//condition for search and filter
  if(currentStatus === '') {
    if(req.query.hasOwnProperty('from') || req.query.hasOwnProperty('to')) {
      if(minPrice == 0 && maxPrice == 0) {
        condition={};
      }
      else {
        if(maxPrice == 0) {
          condition = {price: {$gte: minPrice}};
        }
        else {
            condition = {price: {$lte: maxPrice, $gte: minPrice}};
        }
      }
      
    }
    else {
      if(req.query.hasOwnProperty('keyWord')) {
        if(keyWord !== '') {
          condition = {name: new RegExp(keyWord, 'i')};
        }
      }
    }
    
    
  } else {
    if(req.query.hasOwnProperty('from') || req.query.hasOwnProperty('to')) {
      if(minPrice == 0 && maxPrice == 0) {
        condition={category: currentStatus};
      }
      else {
        if(maxPrice == 0) {
          condition = {category: currentStatus, price: {$gte: minPrice}};
        }
        else {
          condition = {category: currentStatus, price: {$lte: maxPrice, $gte: minPrice}};
        }
      } 
    }
    else {
      if(req.query.hasOwnProperty('keyWord')) {
        if(keyWord !== '') condition = {category: currentStatus, name: new RegExp(keyWord, 'i')};
        else if(keyWord === '') condition = {category: currentStatus};
      }
      else {
        condition={category: currentStatus};
      }
    }
    
  }


  itemsModel.count(condition).then((data)=> {
    pagination.itemsTotal = data;

    itemsModel.find(condition)
    .skip((pagination.currentPage-1)*pagination.totalItemsPerPage)
    .limit(pagination.totalItemsPerPage)
    .then((items) => {
      res.render('page/home/index', { 
        title: 'trang chủ',
        items,
        statusFilter,
        keyWord,
        pagination,
        from,
        to,
        currentStatus
      });
    });
  });

});

//thong-tin-chi-tiet
router.get('/thong-tin-chi-tiet/:id', (req, res, next) => {
  let id = paramsHelper.getParams(req.params, 'id', '')

  itemsModel.findById(id, (err, item) => {
    res.render('page/product-detail/index', { 
      title: 'thông tin chi tiết sản phẩm',
      item,
      id,
      
   });
  });
});


module.exports = router;
