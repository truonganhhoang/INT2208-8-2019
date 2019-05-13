var mongoose= require('mongoose');
var mongoShema= mongoose.Schema;
var bcrypt= require('bcrypt-nodejs');
var schema= new mongoShema ({
    email: {type: String, required:true},
    password: {type:String, required:true},
    name: {type:String, required:true},
    number: {type:Number, required:true}

});

schema.methods.encryptPass= function(password) {
    return bcrypt.hashSync(password, bcrypt.genSaltSync(5),null);
}
schema.methods.validPass= function(password) {
    return bcrypt.compareSync(password, this.password);
}
module.exports=mongoose.model("Admin", schema);