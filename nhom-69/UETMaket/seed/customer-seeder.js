var moogoose = require('mongoose');
var Customer= require('../models/customer');

var customer= Customer();
moogoose.connect('mongodb+srv://ThanhQuy:2911thanhquyxinhgai@cluster0-f5ii6.mongodb.net/test', { useNewUrlParser: true });
var customers = [
    new Customer({
        id: 1,
        Name: 'Quý',
        Age:20,
        Address:'Hà Nội'
    }),
    new Customer({
        id: 1,
        Name: 'Quý',
        Age:20,
        Address:'Hà Nội'
    }),
    new Customer({
        id: 1,
        Name: 'Quý',
        Age:20,
        Address:'Hà Nội'
    })
];
var done=0;
for(var i=0;i< customers.length;i++) {
    customers[i].save(function(err,result) {
        done++;
        if(done === customers.length) {
            exit();
        }
    })
};
function exit() {
    moogoose.disconnect();
}
