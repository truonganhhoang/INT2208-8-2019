var mongoose = require('mongoose');
var Schema = mongoose.Schema; // tương đương 1 bảng trong sql


var schema= new Schema( {
    idUser : {
        type: Schema.Types.ObjectId,
        ref: 'User',
        require:true},
    idProduct: {
        type:Schema.Types.ObjectId,
        ref: 'Product',
        require:true},
    number: {type:Number, require:true},
})
module.exports= mongoose.model('Payment', schema); // tạo 1 module tên produce dưới dạng 1 bảng của mongoose