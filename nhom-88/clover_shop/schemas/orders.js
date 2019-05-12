var mongoose = require('mongoose');

var ordersSchemas = new mongoose.Schema({
    customer : {
        name: String,
        city: String,
        address: String,
        email: String,
        phoneNumber: String,
    },
    product: [
        {product_id: String, Qty: Number}
    ]

});

module.exports = mongoose.model('orders', ordersSchemas);