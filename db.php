<?php
// $host = 'localhost';
// $user = "root";
// $password = "root";
// $db = "chat";
//$link = mysqli_connect($host, $user, $password, $db);
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$link = mysqli_connect($server, $username, $password, $db);


function formatDate($date){
  return date('g:i a', strtotime($date));
}
 ?>
