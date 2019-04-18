var Product= require('../models/product');
var mongoose = require('mongoose');

mongoose.connect('mongodb+srv://ThanhQuy:2911thanhquyxinhgai@cluster0-f5ii6.mongodb.net/test', { useNewUrlParser: true });

// tạo 1 mảng đối tượng
var products = [
    new Product( {
        imagePath : "img/nhabep.jpg",
        name: "Jimin",
        description : "ca sĩ hàn quốc" ,
        price : 200
    }),
    new Product( {
        imagePath : "img/nhabep.jpg",
        name: "Jimin",
        description : "ca sĩ hàn quốc" ,
        price : 200
    }),
    new Product( {
        imagePath : "img/nhabep.jpg",
        name: "Jimin",
        description : "ca sĩ hàn quốc" ,
        price : 200
    }),
    new Product( {
        imagePath : "img/nhabep.jpg",
        name: "Jimin",
        description : "ca sĩ hàn quốc" ,
        price : 200
    }),
    new Product( {
        imagePath : "img/nhabep.jpg",
        name: "Jimin",
        description : "ca sĩ hàn quốc" ,
        price : 200
    }),
    new Product( {
        imagePath : "img/nhabep.jpg",
        name: "Jimin",
        description : "ca sĩ hàn quốc" ,
        price : 200
    })
];
var done=0;
for(var i=0;i< products.length; i++) {
    products[i].save(function (err, result) {
        done++;
        if(done === products.length) {
            exit();
        }

    });
};

function exit() {
    mongoose.disconnect();
}