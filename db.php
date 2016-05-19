<?php
$host = "localhost";
$user = "root";
$password = "root";
$db = "chat";

$link = mysqli_connect($host, $user, $password, $db);

function formatDate($date){
  return date('g:i a', strtotime($date));
}
 ?>
