var mongoose = require('mongoose');
var Schema = mongoose.Schema; // tương đương 1 bảng trong sql


var schema= new Schema( {
    imagePath : {type: String, require:true},
    name: {type:String, require:true},
    description : {type:String, require:true},
    price : {type: Number, require:true},
    group: {type: String, required:true}
})
module.exports= mongoose.model('Product', schema); // tạo 1 module tên produce dưới dạng 1 bảng của mongoose