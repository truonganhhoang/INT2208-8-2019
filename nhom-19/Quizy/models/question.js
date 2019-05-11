
/**
 * 
 * @param {Object} sequelize 
 * @param {Object} Sequelize 
 * 
 */
module.exports = function(sequelize, Sequelize) {
  /**
   * model Question
   */
  var Question = sequelize.define(
    "question",
    {
      id: {
        autoIncrement: true,
        primaryKey: true,
        type: Sequelize.INTEGER
      },
      topic: {
        type: Sequelize.STRING,
        notEmpty: true
      },
      question: {
        type: Sequelize.STRING,
        notEmpty: true
      },

      answer: {
        type: Sequelize.STRING,
        notEmpty: true
      },
      falseAnswer1: {
        type: Sequelize.STRING,
        notEmpty: true
      },
      falseAnswer2: {
        type: Sequelize.STRING,
        notEmpty: true
      },
      falseAnswer3: {
        type: Sequelize.STRING,
        notEmpty: true
      }
    },
    {
      charset: "utf8",
      methods: function getAQuestionByTopic(topic) {
        this.findOne({ order: "rand()" }).then((question) => {
          return question;
        }).catch((err) => {
          console.log(err);
        })
      }
    }
  );
  return Question;
};
