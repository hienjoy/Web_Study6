const express = require("express");
const ejs = require("ejs");
const app = express();
const path = require("path");
const conn=require("./db.js");

app.use(express.urlencoded({extended: true}));
app.set("view engine","ejs");


app.get('/',function(req,res){
                const sql = "select * from visit_table order by seq desc";
                conn.query(sql,function(err,result){
                        if (err) console.log("query is not excuted. select fail!\n"+err);
                        res.render('index.ejs',{list: result});
                });
});

app.post ('/',function(req,res){
                const sql = "insert into visit_table set ?";
                conn.query(sql,req.body,function(err,result){
                        if (err) console.log("error\n"+err);
                        else {console.log(result); res.redirect('/');}
                });
});

app.listen(8008,function(){
        console.log("listening on port 8008");
});
