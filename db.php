<?php
// $host = 'localhost';
// $user = "root";
// $password = "root";
// $db = "chat";
//$link = mysqli_connect($host, $user, $password, $db);

$host = 'us-cdbr-iron-east-04.cleardb.net';
$user = "bdbe1bd843a3e7";
$password = "c029cf19";
$db = "heroku_1122e83085eb00f";
// 
// $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
//
// $server = $url["host"];
// $username = $url["user"];
// $password = $url["pass"];
// $db = substr($url["path"], 1);

$link = mysqli_connect($server, $username, $password, $db);


function formatDate($date){
  return date('g:i a', strtotime($date));
}
 ?>
