var express = require("express");
var router = express.Router();
var controller = require("../controllers/rank-controller");
const utils = require("../../utils/utils");

router.get("/getLevelRank", controller.getLevelRank);

router.get("/rank", utils.isLoggedIn, controller.getRankPage);
module.exports = router;
