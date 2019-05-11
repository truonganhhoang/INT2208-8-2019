const LevelRank = require("../models/LevelRank");
const rank = new LevelRank();

exports.getLevelRank = function(req, res) {
  console.log(req.user);
  rank.update().then(async () => {
    res.send({
      top10Level: rank.getTop10(),
      position: await rank.getPositionById(req.user.id)
    });
  });
};

exports.getRankPage = function(req, res) {
  rank.update().then(async () => {
    res.render("user/rank", {
      title: "Bảng xếp hạng",
      isLogged: req.isLogged,
      username: req.user
        ? req.user.lastname
        : "Not logged in",
      levelRank: rank.getTop10(),
      currentUser: await rank.getPositionById(req.user.id)
    });
  });
};
