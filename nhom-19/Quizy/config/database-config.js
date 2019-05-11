
var env = process.env.NODE_ENV || "development";

module.exports = {
  "development" : {
    "username": process.env.USER ||"zQfQZVB6qJ",
    "password":  process.env.PASSWORD || "pJqvhIvRPA",
    "database": process.env.DB || "zQfQZVB6qJ",
    "host": process.env.DBHOST || "remotemysql.com",
    "dialect": "mysql",
    "connection": {
      "host": process.env.DBHOST || "remotemysql.com",
      "user": process.env.USER ||"zQfQZVB6qJ",
      "password": process.env.PASSWORD || "pJqvhIvRPA"
    }
  }
  
}[env];