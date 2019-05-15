var Product = require('../models/Products');
var mongoose = require('mongoose');


var products = [
    new Product({
        imagePath : "https://msmobile.com.vn/images/products/2019/03/29/resized/iphone-6s_1553850011.png" ,
        title : "iphone 6s cũ",
        description : "Thiết kế năng động trẻ trung",
        price : "3.550.000",
        typeProduct: "phone"
    }),
    new Product({
      imagePath : "https://msmobile.com.vn/images/products/2019/01/30/resized/iphone-7-msmobile-2019_1548825105.png",
      title : "iphone 7 cũ",
      description : "Chất liệu làm bằng da PU mềm mại tự nhiên, bền chắc, tạo sự thoải mái trong mỗi bước chân.",
      price : "5.350.000",
      typeProduct: "phone"
    }),
    new Product({
      imagePath : "https://msmobile.com.vn/images/products/2018/12/26/resized/xiaomi-redmi-6_1545798371.jpeg",
      title : "Xiaomi Redmi 6A",
      description : "Giá cả cạnh tranh với giá các shop trên toàn quốc, chất liệu da vải bền đẹp chắc chắn.",
      price : "2.350.000",
      typeProduct: "phone"
    }),
    new Product({
        imagePath : "https://msmobile.com.vn/images/products/2018/12/26/resized/xiaomi-mi-8-se_1545798287.jpg",
        title : "Xiaomi Mi 8 SE",
        description : "Giá cả cạnh tranh với giá các shop trên toàn quốc.",
        price : "4.550.000",
        typeProduct: "phone"
      }),
      new Product({
        imagePath : "https://msmobile.com.vn/images/products/2019/02/18/resized/galaxy-s9-cu_1550466550.jpg" ,
        title : "Samsung Galaxy S9",
        description : "Thiết kế năng động trẻ trung",
        price : "7.850.000",
        typeProduct: "phone"
    }),
    new Product({
      imagePath : "https://msmobile.com.vn/images/products/2019/01/08/resized/samsung-galaxy-s8-plus_1546945312.jpg",
      title : "Samsung Galaxy S8 Plus",
      description : "Chất liệu làm bằng da PU mềm mại tự nhiên, bền chắc, tạo sự thoải mái trong mỗi bước chân.",
      price : "6.250.000",
      typeProduct: "phone"
    }),
    new Product({
      imagePath : "https://msmobile.com.vn/images/products/2018/12/26/resized/nokia_x7_1545798956.jpeg",
      title : "Nokia X7",
      description : "Giá cả cạnh tranh với giá các shop trên toàn quốc, chất liệu da vải bền đẹp chắc chắn.",
      price : "5.250.000",
      typeProduct: "phone"
    }),
    new Product({
        imagePath : "https://msmobile.com.vn/images/products/2018/10/31/resized/oppo-f9-min_1535079437_1540974065-copy.jpg",
        title : "Oppo F11",
        description : "Giá cả cạnh tranh với giá các shop trên toàn quốc.",
        price : "7.250.000",
        typeProduct: "phone"
      }),
      new Product({
        imagePath : "https://msmobile.com.vn/images/products/2019/04/01/resized/jbl-go-2-min_1554108669.jpg" ,
        title : "Loa Bluetooth JBL GO 2",
        description : "Thiết kế năng động trẻ trung",
        price : "650.000",
        typeProduct: "accessories"
    }),
    new Product({
      imagePath : "https://msmobile.com.vn/images/products/2019/03/28/resized/xiaomi-10000mah-gen-2s_1553763274.png",
      title : "Pin sạc dự phòng Xiaomi",
      description : "Chất liệu làm bằng da PU mềm mại tự nhiên, bền chắc, tạo sự thoải mái trong mỗi bước chân.",
      price : "290.000",
      typeProduct: "accessories"
    }),
    new Product({
      imagePath : "https://msmobile.com.vn/images/products/2019/03/27/resized/xiaomi-mi-ban3_1553664702.jpg",
      title : "Xiaomi Mi Band 3",
      description : "Giá cả cạnh tranh với giá các shop trên toàn quốc, chất liệu da vải bền đẹp chắc chắn.",
      price : "520.000",
      typeProduct: "accessories"
    }),
    new Product({
        imagePath : "https://msmobile.com.vn/images/products/2017/02/24/resized/untitledpng2_1487901495-copy-copy.png",
        title : "Tai nghe Bluetooth không dây",
        description : "Giá cả cạnh tranh với giá các shop trên toàn quốc.",
        price : "4.950.000",
        typeProduct: "accessories"
      }),
      new Product({
        imagePath : "https://msmobile.com.vn/images/products/2019/01/24/resized/sac-khong-day-xiaomi_1548320944.jpg" ,
        title : "Sạc không dây Xiaomi ZMI ",
        description : "Thiết kế năng động trẻ trung",
        price : "450.000",
        typeProduct: "accessories"
    }),
    new Product({
      imagePath : "https://msmobile.com.vn/images/products/2017/11/28/resized/cap-zin-iphone-xin_1511859566.jpg",
      title : "Cable iPhone zin",
      description : "Chất liệu làm bằng da PU mềm mại tự nhiên, bền chắc, tạo sự thoải mái trong mỗi bước chân.",
      price : "190.000",
      typeProduct: "accessories"
    }),
    new Product({
      imagePath : "https://msmobile.com.vn/images/products/2019/03/29/resized/day-sac-vong-tay-xiaomi-mi-band-3-1_1553836474.jpg",
      title : "Dây sạc vòng đeo tay Xiaomi",
      description : "Giá cả cạnh tranh với giá các shop trên toàn quốc, chất liệu da vải bền đẹp chắc chắn.",
      price : "30.000",
      typeProduct: "paccessories"
    }),
    new Product({
        imagePath : "https://msmobile.com.vn/images/products/2018/06/09/resized/akus-10000_1528535911.jpg",
        title : "Sạc Pin dự phòng AKUS ",
        description : "Giá cả cạnh tranh với giá các shop trên toàn quốc.",
        price : "390.000",
        typeProduct: "accessories"
      })
  
  ];

var done =0;
for(var i=0; i<products.length; i++){
    products[i].save(function(err, result){
        done++;
        if(done === products.length){
            exit();
        }
    });

}
function exit(){
    mongoose.disconnect();
}