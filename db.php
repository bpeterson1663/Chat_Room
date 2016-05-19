<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$host = $url['host'];
$user = "bdbe1bd843a3e7";
$password = "c029cf19";
$db = "heroku_1122e83085eb00f";

$link = mysqli_connect($host, $user, $password, $db);

function formatDate($date){
  return date('g:i a', strtotime($date));
}
 ?>
