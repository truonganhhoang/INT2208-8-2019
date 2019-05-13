const mysql = require("mysql");

const dbconfig = require("../config/user-databases");

const connection = mysql.createConnection(dbconfig.connection);

connection.query("USE " + dbconfig.database);
const questionSourceLink = [
  "DiaLy.json",
  "LichSu.json",
  "TuNhien.json",
  "VanHoc.json",
  "XaHoi.json"
];
var topics = ["Địa lý", "Lịch sử", "Tự nhiên", "Văn học", "Xã hội"];
questionSourceLink.forEach((e, index) => {
  const content = require("../source/" + e);
  for (let i = 0; i < content.length; i++) {
    let obj = content[i];
    // var sql =
    //   "INSERT INTO " +
    //   dbconfig.question_table +
    //   " (topic, question, answer, falseAnswer1, falseAnswer2, falseAnswer3) VALUES (" +
    //   topics[i] +
    //   "," +
    //   obj.question +
    //   "," +
    //   obj.key +
    //   "," +
    //   obj.falseAnswer1 +
    //   "," +
    //   obj.falseAnswer2 +
    //   "," +
    //   obj.falseAnswer3 + ")"
    //   ;
    const sql =
      "INSERT INTO " +
      dbconfig.question_table +
      " (topic, question, answer, falseAnswer1, falseAnswer2, falseAnswer3) VALUES ?";
    const value = [[
      topics[index],
      obj.question,
      obj.key,
      obj.falseAnswer1,
      obj.falseAnswer2,
      obj.falseAnswer3
    ]];
    connection.query(sql, [value], (err, result) => {
        if (err) {
            console.log(err);
        }
    });
  }
});

connection.end();