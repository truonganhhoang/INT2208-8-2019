var express = require('express');
var router = express.Router();
var cookieParser = require('cookie-parser');
var csrf= require('csurf');
var bodyParser= require('body-parser');
var passport= require('passport');
var Product= require('../models/product');
var Cart= require('../models/cart');
var Payment= require('../models/payment');
var User =require('../models/user')



var csrfProtection = csrf({ cookie: true });
var parseForm = bodyParser.urlencoded({ extended: false });
var name='', email='',number='', idPro='', namead='', idUser='';
var cook=[], house=[], food=[];
var cookactive =[], houseactive=[], foodactive=[] ;
var cookinfo= [], houseinfo=[], foodinfo=[] ;
var messages='', messages1='';var arr;

// -----------------------------load trang chủ-----------------------
router.get('/', function(req, res, next) {
  Product.find(async function(err,docs){ // ha`m tra? vê` 1 biê´n lô~i va` 1 biê´n kê´t qua?
 cook=[]; house=[]; food=[];
 cookactive =[]; houseactive=[]; foodactive=[];
 cookinfo= []; houseinfo=[]; foodinfo=[] ;
   var numerinfor=3;
   for(var i=0;i<docs.length;i++) {
    if(docs[i].group == 'cook' ) {
      cook.push(docs[i])
     }
     if(docs[i].group == 'house' ) {
       house.push(docs[i])
      }
      if(docs[i].group == 'food' ) {
       food.push(docs[i])
      }
   }
   for(var i=0;i<cook.length;i+=numerinfor) {
     if(i<3) {cookactive.push(cook.slice(i,i+numerinfor))}
    else  {cookinfo.push(cook.slice(i,i+numerinfor))}
   }
   for(var j=0;j<house.length;j+=numerinfor) {
     if(j<3) {houseactive.push(house.slice(j,j+numerinfor))}
     else {houseinfo.push(house.slice(j,j+numerinfor))}
    }
   for(var k=0;k<food.length;k+=numerinfor) {
     if(k<3) {foodactive.push(food.slice(k,k+numerinfor))}
     else {foodinfo.push(food.slice(k,k+numerinfor))}
    }
   res.render('Mainpage', { title: 'UETMarket', cookinfo: cookinfo, cookactive:cookactive,
   houseactive:houseactive, houseinfo:houseinfo, foodactive:foodactive, foodinfo:foodinfo, name:name});
 });
 
});

// --------------------xác thực signin---------------------
router.post('/signin', function(req, res, next) {
  passport.authenticate('local.signin', function(err, user, info) {
    email= req.body.email;
    name= info.name ;
    number= info.number;
    messages=info.message;
    idUser= info.id;
    if (err) { return next(err); }
    if (!user) { return res.redirect('/login'); }
    req.logIn(user, function(err) {
      if (err) { return next(err); }
      return res.redirect('/profile');
    });
  })(req, res, next);

});

// -------------------------link đăng nhập-----------------
router.get('/login', csrfProtection, function(req, res, next) {
  
  res.render("login",{title: "Login",csrfToken: req.csrfToken(),messages1: messages1,messages: messages,name:name }) ;
});

// -----------------------------load khi dang nhâp tha`nh công-------

router.get('/profile',Isloggin, csrfProtection, function(req, res, next) {
  
  res.render("loginOK",{title: "Your profile",name:name, number:number, email: email}) ;
});

//---------------Đăng xuất----------------
router.get('/logout', async function(req, res, next) {
  name=''; email='';number='';
    await  req.logout();
      res.redirect('/');
})
//-----------------------xác thực sign up--------------------------------
router.post('/signup',  parseForm, csrfProtection,function(req, res, next) {
passport.authenticate('local.signup',function(err, user, info) {
  email= req.body.email;
  name= info.name ;
  number= info.number;
  messages1=info.message;
  idUser= info.id;
  if (err) { return next(err); }
  if (!user) { return res.redirect('/login'); }
  req.logIn(user, function(err) {
    if (err) { return next(err); }
    return res.redirect('/profile');
  });
})(req, res, next);
});
// -----------------------------Tìm sản phẩm theo id----------------------
router.get('/find/:id', function(req, res, next) {
  var {id}= req.params;
   Product.findById(id, function(err, product) {
    if(err) {return res.redirect('/');}
    idPro= product;
    res.redirect('/product');
})
})
// thông tin từng sản phẩm
router.get('/product', function(req, res, next) {
 
    res.render('product', {name:name, number:number, imgpath: idPro.imagePath, id: idPro.id, namepro: idPro.name, des: idPro.description, price: idPro.price});
})





/*//co´ thông ba´o
router.post('/signin',  parseForm, csrfProtection,function(req, res, next) {
  passport.authenticate('local.signin',function(err, user, info) {
    if (err) {
      return next(err); // will generate a 500 error
    }
    if (!user) {
      return res.status(409).render('login', {csrfToken: req.csrfToken(),messages: info.message}); // khi ma` co´ user tô`n ta?i, ta?o csrf mo´i
    }

    return res.status(302).redirect('/ok'); // du´ng thi` chuyê?n huo´ng
   
    
  })(req, res, next);
 
  });
  */

/*// ca´ch nhanh
router.post('/signin', passport.authenticate('local.signin', {
  successRedirect : '/ok',
  failureRedirect : '/login',
  failureFlash: 'FAIL'
}));*/

// -------------------------Cách vào list theo từng mục-----------------------
router.get('/list/:id', function(req, res, next) {
  var {id}= req.params;
  if(id == 'cook') {console.log("ok");  arr=cookinfo}
  else if(id == 'house') {arr= houseinfo}
  else if(id == 'food') {arr= foodinfo}
 res.redirect('/list')

});
router.get('/list', function(req, res, next) {
  res.render('Product-list', {title: "List", name:name,arr :arr});
})

  router.get('/login',Isnotloggin, csrfProtection, function(req, res, next) {
  
  res.render("login",{title: "Login",csrfToken: req.csrfToken(),messages1: messages1,messages: messages,name:name }) ;
});
// load khi đăng nhập thành công
router.get('/profile',Isloggin, csrfProtection, function(req, res, next) {
  
  res.render("loginOK",{title: "Your profile",name:name, number:number, email: email}) ;
});
  router.get('/', function(req, res, next) {
    Product.find(function(err,docs){ // hàm trả về 1 biến lỗi và 1 biến kết quả
      var productinfo= [];
      var numerinfor=3;
      for(var i=0;i<docs.length;i+= numerinfor) {
        productinfo.push(docs.slice(i,i+numerinfor));
      }
      res.render('Mainpage', { title: 'UETMarket', products: productinfo, name:name});
    });
    
  });
  router.get('/logout', function(req, res, next) {
    name=''; email='';number='';
        req.logout();
        res.redirect('/');
  })




//-------------------Thêm vào giỏ hàng-------------------
  router.get('/add-to-cart/:id',Isloggin, function(req, res, next) {
      var productId= req.params.id;
      var x= req.session.cart ? 'co´' :'chua co´';
      console.log(x);
      var cart= new Cart(req.session.cart ? req.session.cart : {});
      Product.findById(productId, function(err, product) { // ti`m sa?n phâ?m theo id
        if(err) {
          return res.redirect('/');
        }
        
        cart.add(product, product.id); // add sa?n phâ?m vs id do´ theo ha`m add trong cart.js
        req.session.cart=cart; // ga´n danh sa´ch sa?n phâ?m cho?n cu?a phiên la`m viê?c na`y la` cart
        console.log(req.session.cart);
        res.redirect('/cart'); // chuyê?n huo´ng
      });
  
  });

  //--------------thông tin giỏ hàng------------------------
  router.get('/cart', function(req, res, next){
    if(!req.session.cart) {
    return res.render('cart', {title: "your cart",product:null,price:0, name:name});
    }
    var cart= new Cart(req.session.cart);
    res.render('cart', {title: "your cart",product: cart.generrateArray(), price: cart.totalPrice, name:name })
  })


  //----------------check trước khi mua hàng-----------------
  router.get('/check', function(req, res, next) {
    var cart= new Cart(req.session.cart);
    res.render('check', {title:"Mua ha`ng", price: cart.totalPrice, name:name, number:number });
  })

  //---------------xác thực mua hàng gửi dữ liệu cho admin----------------------
  router.post('/check-ok', function(req, res, next) {
    var cart= new Cart(req.session.cart);
   var productlist= cart.generrateArray();
   console.log(productlist.length);
   for(var i=0; i<productlist.length; i++ ) {
    var payment= new Payment();
    console.log(productlist[i].qty);
    payment.idUser= idUser;
    payment.idProduct= productlist[i].item._id ;
    payment.number= productlist[i].qty;
    payment.save(function(err,result ) {
      if(err) { return done(err)}
     
    //res.send(req.body.address);
   
  })
  cart.remove(productlist[i].item._id);
  req.session.cart= cart;
  }
  res.render('checkOK', {title: "Mua hàng", price: cart.totalPrice, name:name, number:number});

  });

  //--------giảm sl hàng đặt-------------
  router.get('/reduce/:id', function(req, res, next) {
    var {id}= req.params;
    var cart= new Cart(req.session.cart ? req.session.cart : {} );
    cart.reduceOne(id);
    req.session.cart= cart;
    res.redirect("/cart");
  })

  //---------xóa hàng đã đặt------------
  router.get('/remove/:id', function(req, res, next) {
    var {id}= req.params;
    var cart= new Cart(req.session.cart ? req.session.cart : {} );
    cart.remove(id);
    req.session.cart= cart;
    res.redirect("/cart");
  })
//-----------link đn admin----------------
  router.get('/admin', function (req, res, next) {
    res.render('admin');

  })

  //-----------LoadPayment--------------
  router.get('/:id',async function(req, res,next) {
    var each= {
      userinfo : {type: User},
      productinfo: {type: Product},
      number: {type:Number}
    };
     var k=0;
   var payments=[];
    var {id}= req.params;
    if(id == namead ) {
    await  Payment.find(async function(err,docs){ // ha`m tra? vê` 1 biê´n lô~i va` 1 biê´n kê´t qua?
      for(var i=0;i<docs.length;i++) {
      await   User.findById(docs[i].idUser, function(err, user) {
              each.userinfo= user;
              
         })
      await Product.findById(docs[i].idProduct, function(err, product) {
          each.productinfo= product;
        //  console.log(product)
     })
      each.number= docs[i].number
      payments[k]=each;
      k++;
      console.log(payments.valueOf())
      console.log("aaaaaaaaaaaaaa")
    }
    
    return res.render('payment', { title: 'Payment', payments: payments});
        
      
  })
}
    else  {res.redirect('/')}
})
//----------xác thực admin---------------
  router.post('/admin-signin', function(req, res, next) {
    passport.authenticate('admin.signin', function(err, admin, info) {
      if (err) { return next(err); }
      if (!admin) { return res.redirect('/login'); }
      req.logIn(admin, function(err) {
        if (err) { return next(err); }
        namead= info.namead;
        return res.redirect('/'+ info.namead);
      });
    })(req, res, next);
  
  });
 
module.exports = router;
function Isloggin(req, res, next){
    if(req.isAuthenticated()) {
     return next();
    }
   // res.redirect("/");
   else {res.redirect("/login");}
}
function Isnotloggin(req, res, next){
  if(!req.isAuthenticated()) {
   return next();
  }
  res.redirect("/profile");
}
