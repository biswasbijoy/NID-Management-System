const mysql = require('mysql');
const con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "Universalpass1@",
    database: "nid_management"
});


con.connect(function(err) {
    if (err) {
        console.log(err.message);
    }
    else {
        console.log("Connected!");
    }
});

module.exports = con;