var mogoose = require('mongoose');
var Schema= mogoose.Schema;

var schema = new Schema ( {
    id: {type:Number, required:true},
    Name: {type: String,required:true},
    Age: {type:Number, required:true},
    Address: {type:String, required:true}
})
module.exports= mogoose.model('Customer', schema);



