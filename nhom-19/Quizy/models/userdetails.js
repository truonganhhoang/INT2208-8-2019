var User = require("./user");
var sequelize = require("sequelize");
module.exports = function(sequelize, Sequelize) {
  /**
   * model UserDetails
   */
  var UserDetails = sequelize.define("userdetails", {
    user_id: {
      primaryKey: true,
      type: Sequelize.INTEGER
    },

    level: {
      type: Sequelize.INTEGER
    },
    exp: {
      type: Sequelize.INTEGER
    },

    winMatchQuantity: {
      type: Sequelize.INTEGER
    },

    playedMatchQuantity: {
      type: Sequelize.INTEGER
    },

    trueQuizQuantity: {
      type: Sequelize.INTEGER
    },

    falseQuizQuantity: {
      type: Sequelize.INTEGER
    },

    trueQuizSeries: {
      type: Sequelize.INTEGER
    },

    currentTrueQuizSeries: {
      type: Sequelize.INTEGER
    }
  });
  UserDetails.prototype.addWinMatchQuantity = function() {
    this.winMatchQuantity++;
  };

  UserDetails.prototype.addPlayedMatchQuantity = function() {
    this.playedMatchQuantity++;
  };

  UserDetails.prototype.addTrueQuizQuantity = function() {
    console.log("Da tang so cau dung");
    this.trueQuizQuantity = this.trueQuizQuantity + 1;
  };

  UserDetails.prototype.addFalseQuizQuantity = function() {
    console.log("Da tang so cau sai");

    this.setDataValue("falseQuizQuantity", this.falseQuizQuantity + 1);
    console.log("So cau sai:" + this.falseQuizQuantity);
  };

  UserDetails.prototype.updateTrueQuizSeries = function(newSeries) {
    if (newSeries > this.trueQuizSeries) {
      this.trueQuizSeries = newSeries;
    }
  };
  return UserDetails;
};
