const mysql = require('mysql');
const path  = require('path');
const express = require("express");
const bodyparser = require("body-parser");
const app = express();
const dotenv = require('dotenv');
const { request } = require('http');

dotenv.config({ path: './.env' });

const db = mysql.createConnection({
    host: process.env.DATABASE_HOST,
    user: process.env.DATABASE_USER,
    password: process.env.DATABASE_PASSWORD,
    database: process.env.DATABASE
});

const publicDirectory = path.join(__dirname, './public');

app.use(express.static(publicDirectory));
app.use(bodyparser.urlencoded({extended: false}));

app.set('views', __dirname + '/view');

app.set('view engine', 'hbs');

db.connect((err) => {
    if (err) {
        throw err;
    }
    console.log('MySql Connected...');
});

app.get("/", (req, res) => {
    res.render("signup");
});

app.post("/submit", (req, res) => {
    console.log(req.body);
    res.sendFile('signup', {
        title: 'Data Saved',
        message: 'Data Saved Successfully'
    });
});

app.listen(3001, () => {
    console.log("Server is running on port 3001");
});