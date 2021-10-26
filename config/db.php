<?php
$servername = "localhost";
//$servername = "us-cdbr-east-04.cleardb.com";
$username = "root";
//$username = "b21fd5b152a22c";
$password = "";
//$password = "76a2d9d2";
$dbname = "ibn_sina";
//$dbname = "heroku_3c8eb360cbe23ea";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>