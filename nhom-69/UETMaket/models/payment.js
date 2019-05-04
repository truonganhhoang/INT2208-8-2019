var mongoose = require('mongoose');
var Schema = mongoose.Schema; // tương đương 1 bảng trong sql


var schema= new Schema( {
    idUser : {type: String, require:true},
    idProduct: {type:String, require:true},
})
module.exports= mongoose.model('Payment', schema); // tạo 1 module tên produce dưới dạng 1 bảng của mongoose