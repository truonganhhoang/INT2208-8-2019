var Products = require('../models/Products');
var UserSchema = require('../models/UserSchema');
module.exports.home = async function(req, res, next) {
    var products = await Products.find();


    var phone = products.filter(function(items) {

        return items.typeProduct === "phone" ;
    });

    var tablet = products.filter(function(items) {

        return items.typeProduct === "tablet";
    });

    var accessories = products.filter(function(items) {

        return items.typeProduct === "accessories";
    });
    var hotproducts = [];
    while (hotproducts.length < 10) {
        var random = Math.floor(Math.random() * 24);
        if (hotproducts.indexOf(products[random]) === -1) {
            hotproducts.push(products[random]);
        }
        
    }
    
    console.log(hotproducts);
    
    
   
    
    res.render('index', { title: 'Shop69', user: req.user, phone: phone, tablet: tablet, accessories: accessories, hotproducts: hotproducts});
    
    
};

module.exports.delete = function(req, res, next) {
    if (!req.isAuthenticated()) {
        res.redirect('/users/dang-nhap');
    } else {
        
        var user = req.user;
        UserSchema.findOne({
            'email': user.email
        }, function(err, user) {
            if (err) {
                return done(err);
            }
            var productId = req.params.productId;

            user.cart.pull(productId);

            
            user.save(function(err) {
                if (err)    
                    console.log(err);
            })
            
            res.redirect('/users/gio-hang');
                
        });

    }
}

module.exports.add = function(req, res, next) {
    if (!req.isAuthenticated()) {
        res.redirect('/users/dang-nhap');
    } else {
        
        
        var user = req.user;
        UserSchema.findOne({
            'email': user.email
        }, function(err, user) {
            if (err) {
                return done(err);
            }
            var productId = req.params.productId;

            user.cart.push(productId);

            console.log(countOccurrences(user.cart));
            
            user.save(function(err) {
                if (err)    
                    console.log(err);
            })
            
            res.redirect('/users/gio-hang');
                
        });

    }

}

function countOccurrences(arr) {
    var temp = [];
    for (i of arr) {
      if (temp.indexOf(i) === -1) {
        temp.push(i);
      }
    }
    var count = [];
    for (var i = 0; i < temp.length; i++) {
      count.push(0);
    }
    arr.reduce(function(x, y) {
      count[temp.indexOf(y)]++;
      return count;
    }, count);
    var index = 0;
    var result = temp.map(function(x) {
      return x + ': ' + count[index++];
    });
    return  result;
}

module.exports.get_login = function(req, res, next) {
    
    res.render('./login/login', { title: 'Đăng nhập', message:  req.flash('error')});
};

module.exports.get_register = function(req, res, next) {
    res.render('./register/register', { title: 'Đăng ký', message:  req.flash('error')});
};


module.exports.get_cart = async function(req, res, next) {
    
    if (req.isAuthenticated()) {
        var user = req.user;
        
        UserSchema.findOne({
            'email': user.email
        }, async function(err, user) {
            if (err) {
                return done(err);
            }
            var cart = countOccurrences(user.cart);
            console.log(cart);
            var products = await Products.find();
            res.render('./hbs/cart', { title: 'Giỏ hàng', user: req.user, cart: cart, products: products});
        });
        
    } else {
        res.redirect('/users/dang-nhap');
    }
   
}


module.exports.get_logout = function(req, res, next) {
    if (req.isAuthenticated()) {
        req.logout();
        res.redirect('/');
    }
}

module.exports.get_profile = function(req, res, next) {
    if (req.isAuthenticated()) {
        res.render('./hbs/profile', { title: 'Hồ sơ', user: req.user });
    } else {
        res.redirect('/users/dang-nhap');
    }
}
module.exports.shoes = function(req, res, next) {
    if (req.isAuthenticated()) {
        res.render('./hbs/shoes', { title: 'Shoes', user: req.user });
    } else {
        res.redirect('/users/dang-nhap');
    }
};

module.exports.get_search = async function(req, res, next) {
    var q = req.query.search;
    
    var products = await Products.find();

    var result = products.filter(function(items) {
        return items.title.toLowerCase().indexOf(q.toLowerCase()) !== -1 ;
    })
     
    res.render('./hbs/search', { title: 'Tìm kiếm', user: req.user, products: result, query: q });
}