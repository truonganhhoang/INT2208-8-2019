var models = require("../models");
const Question = models.question;
Question.findAll({limit: 1 }).then(results => {
    console.log(results);
}).catch(err => {
    console.log(err);
})