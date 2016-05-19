<?php
$host = "mysql://bdbe1bd843a3e7:c029cf19@us-cdbr-iron-east-04.cleardb.net/heroku_1122e83085eb00f?reconnect=true";
$user = "bdbe1bd843a3e7";
$password = "c029cf19";
$db = "heroku_1122e83085eb00f";

$link = mysqli_connect($host, $user, $password, $db);

function formatDate($date){
  return date('g:i a', strtotime($date));
}
 ?>
