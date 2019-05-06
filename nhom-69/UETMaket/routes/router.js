var express = require('express');
var router = express.Router();
var cookieParser = require('cookie-parser');
var csrf= require('csurf');
var bodyParser= require('body-parser');
var passport= require('passport');
var Product= require('../models/product');
var Cart= require('../models/cart');




var csrfProtection = csrf({ cookie: true });
var parseForm = bodyParser.urlencoded({ extended: false });
var name='', email='',number='', idPro='', namead='';
// load login
router.get('/find/:id', function(req, res, next) {
  var {id}= req.params;
   Product.findById(id, function(err, product) {
    if(err) {return res.redirect('/');}
    idPro= product;
    res.redirect('/product');
})
})

router.get('/product', function(req, res, next) {
    res.render('product', {imgpath: idPro.imagePath, id: idPro.id, namepro: idPro.name, des: idPro.description, price: idPro.price});
})
var messages='', messages1='';
router.post('/signup',  parseForm, csrfProtection,function(req, res, next) {
passport.authenticate('local.signup',function(err, user, info) {
  email= req.body.email;
  name= info.name ;
  number= info.number;
  messages1=info.message;
  if (err) { return next(err); }
  if (!user) { return res.redirect('/login'); }
  req.logIn(user, function(err) {
    if (err) { return next(err); }
    return res.redirect('/profile');
  });
})(req, res, next);
});
router.post('/signin', function(req, res, next) {
  passport.authenticate('local.signin', function(err, user, info) {
    email= req.body.email;
    name= info.name ;
    number= info.number;
    messages=info.message;
    if (err) { return next(err); }
    if (!user) { return res.redirect('/login'); }
    req.logIn(user, function(err) {
      if (err) { return next(err); }
      return res.redirect('/profile');
    });
  })(req, res, next);

});
/*//có thông báo
router.post('/signin',  parseForm, csrfProtection,function(req, res, next) {
  passport.authenticate('local.signin',function(err, user, info) {
    if (err) {
      return next(err); // will generate a 500 error
    }
    if (!user) {
      return res.status(409).render('login', {csrfToken: req.csrfToken(),messages: info.message}); // khi mà có user tồn tại, tạo csrf mới
    }

    return res.status(302).redirect('/ok'); // đúng thì chuyển hướng
   
    
  })(req, res, next);
 
  });
  */

/*// cách nhanh
router.post('/signin', passport.authenticate('local.signin', {
  successRedirect : '/ok',
  failureRedirect : '/login',
  failureFlash: 'FAIL'
}));*/
router.get('/list', function(req, res, next) {
  res.render('Product-list', {title: "List", name:name});

});
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

  router.get('/add-to-cart/:id',Isloggin, function(req, res, next) {
      var productId= req.params.id;
      var x= req.session.cart ? 'có' :'chưa có';
      console.log(x);
      var cart= new Cart(req.session.cart ? req.session.cart : {});
      Product.findById(productId, function(err, product) { // tìm sản phẩm theo id
        if(err) {
          return res.redirect('/');
        }
        
        cart.add(product, product.id); // add sản phẩm vs id đó theo hàm add trong cart.js
        req.session.cart=cart; // gán danh sách sản phẩm chọn của phiên làm việc này là cart
        console.log(req.session.cart);
        res.redirect('/cart'); // chuyển hướng
      });
  
  });
  router.get('/cart', function(req, res, next){
    if(!req.session.cart) {
    return res.render('cart', {title: "your cart",product:null,price:0, name:name});
    }
    var cart= new Cart(req.session.cart);
    res.render('cart', {title: "your cart",product: cart.generrateArray(), price: cart.totalPrice, name:name })
  })
  router.get('/check', function(req, res, next) {
    var cart= new Cart(req.session.cart);
    res.render('check', {title:"Mua hàng", price: cart.totalPrice, name:name, number:number });
  })
  router.post('/check-ok', function(req, res, next) {
    //res.send(req.body.address);
    res.render('checkOK');
  })
  router.get('/reduce/:id', function(req, res, next) {
    var {id}= req.params;
    var cart= new Cart(req.session.cart ? req.session.cart : {} );
    cart.reduceOne(id);
    req.session.cart= cart;
    res.redirect("/cart");
  })
  router.get('/remove/:id', function(req, res, next) {
    var {id}= req.params;
    var cart= new Cart(req.session.cart ? req.session.cart : {} );
    cart.remove(id);
    req.session.cart= cart;
    res.redirect("/cart");
  })

  router.get('/admin', function (req, res, next) {
    res.render('admin');
    
  })
  router.get('/:id', function(req, res,next) {
    var {id}= req.params;
    if(id == namead) {
      return res.render("payment");
    }
    return redirect('/');
  })
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