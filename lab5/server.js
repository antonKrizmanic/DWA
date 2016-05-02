var express = require('express');
var session = require('express-session');
var mysql = require('mysql');
var app = express();
var bodyParser = require('body-parser');

// Create application/x-www-form-urlencoded parser
var urlencodedParser = bodyParser.urlencoded({ extended: false })

var connection = mysql.createConnection(
    {
      host     : 'localhost',
      user     : 'root',
      password : 'root',
      database : 'fantastic_beasts'
    }
);
connection.connect();

var queryString="SELECT id FROM proizvodi;";
connection.query(queryString, function(err, rows, fields) {
    if (err) throw err;
    for (var i in rows) {
     console.log('Id: ', rows[i].id);
    }
});

app.use(session({secret: 'ssshhhhh'}));
app.use(express.static('public'));
var sess;
app.get('/index.html', function (req, res) {
   res.sendFile( __dirname + "/" + "login.html" );
   sess=req.session;
})

app.post('/process_post', urlencodedParser, function (req, res) {

   // Prepare output in JSON format
   if(req.body.first_name==sess.ime){
      /*response = {
       first_name:req.body.first_name,
       last_name:req.body.last_name
      };*/
      res.sendFile( __dirname + "/" + "login.html" );
   }
   else{
    /*response={
      ime:"krivo"
    };*/
   }
   /*response = {
       first_name:req.body.first_name,
       last_name:req.body.last_name
   };*/
   //console.log(response);
   //res.end(JSON.stringify(response));
})

var server = app.listen(8081, function () {

  var host = server.address().address
  var port = server.address().port

  console.log("Example app listening at http://%s:%s", host, port)

})