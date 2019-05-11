const AbstractRank = require("./AbstractRank");
const models = require("../../models");
const User = models.user;
const UserDetail = models.userdetails;

module.exports = class LevelRank extends AbstractRank {
  constructor() {
    super();
  }

  /**
   * update
   */
  async update() {
    //get top 10 from database
    await UserDetail.findAll({
      attributes: ["user_id", "level", "exp"],
      order: [["level", "DESC"], ["exp", "DESC"]],
      limit: 10,
      include: [{ model: models.user }]
    })
      .then(data => {
        this.top10 = data;
      })
      .catch(reason => {
        console.log(reason);
      });
  }

  /**
   * get top 10 from database
   */
  getTop10() {
    return this.top10;
  }

  async getPositionById(id) {
    return UserDetail.findAll({
      attributes: ["user_id", "level", "exp"],
      order: [["level", "DESC"], ["exp", "DESC"]],
      include: [{ model: models.user }]
    }).then(data => {
      let pos = 1;
      for (let i = 0; i < data.length; i++) {
        let currentId = data[i].dataValues.user_id;
        console.log("So sanh :" + currentId + " va " + id);
        if (currentId === id) {
          console.log("Dung roi");
          break;
        }
        pos++;
      }
      console.log(pos);
      return {position: pos, detail: data[pos - 1].dataValues};
    }) 
    .catch(reason => {
      console.log(reason);
    });
  }

};
 