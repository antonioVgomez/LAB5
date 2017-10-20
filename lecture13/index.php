<?php
    // connect our mysql DB server
    // mysql://bfeaad637110cb:c0419d9c@us-cdbr-iron-east-05.cleardb.net/heroku_303da836d19345a?reconnect=true


function getDatabaseConnection() {   
$servername = "us-cdbr-iron-east-05.cleardb.net";
$username = "bfeaad637110cb";
$password = "c0419d9c";
$dbname = "heroku_303da836d19345a";


  // Create connection
$dbConn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

return $dbConn; 

$conn->close();
}

?>


