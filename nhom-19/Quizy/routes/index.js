var express = require("express");
var router = express.Router();
var models = require("../models");
const Contact = models.contact;
/* GET home page. */
router.get("/", function(req, res, next) {
  console.log(req.isLogged);
  res.render("home/home", {
    isLogged: req.user ? true : false,
    username: req.user ? req.user.lastname : "Not logged in"
  });
});

router.post("/contact", function(req, res) {
  const contact = req.body;
  console.log(contact);
  Contact.create(contact).then(contact => {
    if (contact) {
      res.send({ success: true });
    } else {
      res.send({
        success: false
      });
    }
  });
});

module.exports = router;
