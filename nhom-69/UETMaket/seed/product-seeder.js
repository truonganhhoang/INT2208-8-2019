var Product= require('../models/product');
var mongoose = require('mongoose');

mongoose.connect('mongodb+srv://ThanhQuy:2911thanhquyxinhgai@cluster0-f5ii6.mongodb.net/test', { useNewUrlParser: true });

// tạo 1 mảng đối tượng
var products = [
    new Product( {
        imagePath : "img/house/book.jpg",
        name: "Sách tham khảo",
        description : "Tài liệu tham khảo có chọn lọc" ,
        price : 250,
        group: 'house'
    }),
    new Product( {
        imagePath : "img/house/chair.jpg",
        name: "Ghế bàn cao cấp",
        description : "Ghế ngồi học chất lượng cao, giá thành hợp lí" ,
        price : 350,
        group: 'house'
    }),
    new Product( {
        imagePath : "img/house/electric_fan.jpg",
        name: "Quạt điện dân dụng",
        description : "Quạt điện Việt-Nhật dáng cao, chất lượng đảm bảo" ,
        price : 350,
        group: 'house'
    }),
    new Product( {
        imagePath : "img/house/headphone.jpg",
        name: "Tai nghe",
        description : "Tai nghe chất lượng cho âm thanh chân thực và êm dịu với tai" ,
        price : 550,
        group: 'house'
    }),
    new Product( {
        imagePath : "img/house/laptop.jpg",
        name: "Máy tính xách tay",
        description : "Máy tính xách tay nhãn hiệu ASUS,CPU: Intel core i5, màn hình 16 inch, Ram: 4GB" ,
        price : 12000,
        group: 'house'
    }),
    new Product( {
        imagePath : "img/house/mouse.jpg",
        name: "Chuột máy tính",
        description : "Chuột máy tính hàng mới 90% chất lượng đảm bảo" ,
        price : 850,
        group: 'house'
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