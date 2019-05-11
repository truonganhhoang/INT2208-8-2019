var bCrypt = require("bcrypt-nodejs");
module.exports = function(passport, user, userdetails) {
  var User = user;
  var UserDetails = userdetails;
  var LocalStrategy = require("passport-local").Strategy;

  //serialize
  passport.serializeUser(function(user, done) {
    done(null, user.id);
  });

  // deserialize user
  passport.deserializeUser(function(id, done) {
    User.findById(id).then(function(user) {
      if (user) {
        done(null, user.get());
      } else {
        done(user.errors, null);
      }
    });
  });

  passport.use(
    "local-signup",
    new LocalStrategy(
      {
        usernameField: "email",
        passwordField: "password",
        passReqToCallback: true // allows us to pass back the entire request to the callback
      },

      function(req, email, password, done) {
        req
          .checkBody("email", "Email không hợp lệ")
          .notEmpty()
          .isEmail();
        req
          .checkBody("password", "Mật khẩu không hợp lệ")
          .notEmpty()
          .isLength({ min: 4 });
        req.checkBody("firstname", "Không được bỏ trống phần Họ").notEmpty();
        req.checkBody("lastname", "Không được bỏ trống phần Tên").notEmpty();
        
        const errors = req.validationErrors();
        if (errors) {
          const messages = [];
          errors.forEach(error => {
            messages.push(error.msg);
          });
          return done(null, false, req.flash("error", messages));
        }

        var generateHash = function(password) {
          return bCrypt.hashSync(password, bCrypt.genSaltSync(8), null);
        };

        User.findOne({
          where: {
            email: email
          }
        }).then(function(user) {
          if (user) {
            return done(
              null,
              false,
              req.flash("error", "Email này đã tồn tại")
            );
          } else {
            var userPassword = generateHash(password);
            var data = {
              email: email,
              password: userPassword,
              firstname: req.body.firstname,
              lastname: req.body.lastname
            };

            User.create(data).then(function(newUser, created) {
              if (!newUser) {
                return done(null, false);
              }
              if (newUser) {
                User.findOne({
                  where: {
                    email: email
                  }
                }).then(result => {
                  var id = result.dataValues.id;
                  var details = {
                    user_id: id,
                    level: 0,
                    exp: 0,
                    winMatchQuantity: 0,
                    playedMatchQuantity: 0,
                    trueQuizQuantity: 0,
                    falseQuizQuantity: 0,
                    trueQuizSeries: 0,
                    currentTrueQuizSeries: 0
                  };
                  UserDetails.create(details);
                });
                return done(null, newUser);
              }
            });
          }
        });
      }
    )
  );

