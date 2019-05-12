var mongoose = require('mongoose');

var itemsSchemas = new mongoose.Schema({
    name: String,
    category: String,
    type: String,
    status: Number,
    price: Number,
    desc: String,
    origin: String,
    place: String,
    link_img: []

});

module.exports = mongoose.model('items', itemsSchemas);