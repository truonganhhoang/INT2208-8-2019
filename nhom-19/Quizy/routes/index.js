var express = require("express");
var router = express.Router();
var models = require("../models");
const Contact = models.contact;
const nodemailer = require("nodemailer");
/* GET home page. */
router.get("/", function(req, res, next) {
  console.log(req.isLogged);
  res.render("home/home", {
    isLogged: req.user ? true : false,
    username: req.user ? req.user.lastname : "Not logged in"
  });
});

var transporter = nodemailer.createTransport({
  service: 'gmail',
  auth: {
    user: 'vatliyeutoi@gmail.com',
    pass: 'hoangthithuytrang12345'
  }
});



router.post("/contact", function(req, res) {
  const contact = req.body;
  console.log(contact);
  var mailOptionsForDev = {
    from: 'vatliyeutoi@gmail.com',
    to: 'vatliyeutoi@gmail.com',
    subject: 'Quizy Contact' + contact.name,
    text: JSON.stringify(contact)
  };

  var mailOptionsForUser = {
    from: 'vatliyeutoi@gmail.com',
    to: contact.email,
    subject: 'Quizy Contact',
    text: 'Cảm ơn phản hồi của bạn.\nMong bạn sẽ tiếp tục ủng hộ Quizy trong tương lai.'
  };
  
  transporter.sendMail(mailOptionsForDev, function(error, info){
    if (error) {
      console.log(error);
    } else {
      console.log('Email sent: ' + info.response);
    }
  });
  transporter.sendMail(mailOptionsForUser, function(error, info){
    if (error) {
      console.log(error);
    } else {
      console.log('Email sent for User: ' + info.response);
    }
  });
});

module.exports = router;