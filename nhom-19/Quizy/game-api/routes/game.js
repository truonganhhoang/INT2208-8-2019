var express = require("express");
var router = express.Router();
var controller = require("../controllers/game-controller");
const utils = require("../../utils/utils");

/* GET list game page */
router.get("/", controller.getGameListPage);

/* GET classic game page */
router.get("/classic", utils.isLoggedIn, controller.getClassicGamePage);

/* GET a question */
router.get("/getQuestion", controller.getARandomTopicQuestion);

/* POST an answer and check it */
router.post("/getAnswer", controller.checkAnswer);

/* Get true answer */
router.post("/getTrueAnswer", controller.getTrueAnswer);

module.exports = router;
