const Sequelize = require("sequelize");
const models = require("../../models");
const Question = models.question;
const UserDetails = models.userdetails;
const utils = require("../../utils/utils");
const levelSystem = require("../level-point-system/level-point-system")
  .levelSystem;

function updateLevel(user, currentLevel, exp) {
  let newLevel;
  for (let i = 0; i < levelSystem.length; i++) {
    console.log("Level " + levelSystem[i]);
    if (exp >= levelSystem[i] && exp < levelSystem[i + 1]) {
      newLevel = i;
      break;
    }
  }
  console.log("Level hien tai la:" + newLevel);
  if (newLevel > currentLevel) {
    user.update({ level: newLevel });
  }
}

const gamelist = require("../models/gamelist").gameList;
exports.getGameListPage = function(req, res) {
  res.render("games/gamelist", {
    title: "Danh sách trò chơi",
    isLogged: req.isLogged,
    username: req.user ? req.user.lastname : "Not logged in",
    gameList: gamelist});
};

exports.getClassicGamePage = function(req, res) {
  console.log(req.user);
  res.render("games/classic", {
    title: "Classic",
    isLogged: req.isLogged,
    username: req.user ? req.user.lastname : "Not logged in"
  });
};

exports.getARandomTopicQuestion = function(req, res) {
  Question.findOne({
    order: [[Sequelize.fn("RAND")]],
    limit: 1
  })
    .then(data => {
      var answers = utils.shuffleArray([
        data.dataValues.answer,
        data.dataValues.falseAnswer1,
        data.dataValues.falseAnswer2,
        data.dataValues.falseAnswer3
      ]);
      const question = {
        topic: data.dataValues.topic,
        question: data.dataValues.question,
        answerA: answers[0],
        answerB: answers[1],
        answerC: answers[2],
        answerD: answers[3]
      };
      res.send(question);
    })
    .catch(err => {
      console.log(err);
    });
};

exports.checkAnswer = function(req, res) {
  const submitData = req.body;
  //get current user
  var user = req.user;
  //find user'details inorder to update information
  UserDetails.findOne({ where: { user_id: user.id } }).then(userDetails => {
    console.log("USER DETAILS: " + userDetails);
    Question.findOne({ where: { question: submitData.question } })
      .then(data => {
        console.log(data.dataValues);
        //if user had true answer, send result
        if (data.dataValues.answer === submitData.answer) {
          // update true quiz quantity, exp += 5
          userDetails.update({
            trueQuizQuantity: userDetails.dataValues.trueQuizQuantity + 1,
            exp: userDetails.dataValues.exp + 5
          });
          //update true quiz series
          userDetails.update({
            currentTrueQuizSeries:
              userDetails.dataValues.currentTrueQuizSeries + 1
          });
          //if current true quiz series is greater than true quiz series, update
          if (
            userDetails.dataValues.currentTrueQuizSeries >
            userDetails.dataValues.trueQuizSeries
          ) {
            userDetails.update({
              trueQuizSeries: userDetails.dataValues.currentTrueQuizSeries
            });
          }
          updateLevel(
            userDetails,
            userDetails.dataValues.level,
            userDetails.dataValues.exp
          );
          console.log(userDetails.dataValues.trueQuizQuantity);
          res.send({ result: true });
          //if user had false answer, send result and update false quiz quantity
        } else {
          //current true quiz series back to 0, exp += 1
          userDetails.update({
            falseQuizQuantity: userDetails.dataValues.falseQuizQuantity + 1,
            currentTrueQuizSeries: 0,
            exp: userDetails.dataValues.exp + 1
          });
          updateLevel(
            userDetails,
            userDetails.dataValues.level,
            userDetails.dataValues.exp
          );
          console.log(userDetails.dataValues.falseQuizQuantity);
          res.send({ result: false });
        }
      })
      .catch(err => {
        console.log(err);
      });
  });
};

exports.getTrueAnswer = function(req, res) {
  const ques = req.body;
  Question.findOne({ where: { question: ques.question } })
    .then(data => {
      res.send(data.answer);
    })
    .catch(err => {
      console.log(err);
    });
  //get current user
  var user = req.user;
  //find user'details inorder to update information
  UserDetails.findOne({ where: { user_id: user.id } }).then(userDetails => {
    //current true quiz series back to 0, exp += 1
    userDetails.update({
      falseQuizQuantity: userDetails.dataValues.falseQuizQuantity + 1,
      currentTrueQuizSeries: 0,
      exp: userDetails.dataValues.exp + 1
    });
  });
};
