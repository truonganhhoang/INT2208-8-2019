var mysql = require('mysql');

var connnectsql = mysql.createConnection({
  host: "localhost",
  user: "root", 
  password: "2911thanhquyxinhgai",
  database: "classicmodels"

});

connnectsql.connect(function(err) {
    if(err) throw err;
    connnectsql.query("select * from customers", function(err, result) {
      if(err) throw err;
      console.log(result);
    })
  
});