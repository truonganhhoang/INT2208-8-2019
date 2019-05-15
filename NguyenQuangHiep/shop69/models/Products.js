
var mongoose = require('mongoose');
var Products = new mongoose.Schema({
    imagePath: {
    type: String,
  },
  title: {
    type: String,
  },
  description: {
    type: String,
  },
  price: {
    type: String,
  },
  typeProduct: {
    type:  String,
    required: true,
  }
});

var Product = mongoose.model('Product', Products);
module.exports = Product;