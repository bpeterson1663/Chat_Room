<?php

$server = "us-cdbr-iron-east-04.cleardb.net";
$username = "b03c8432abf7f1";
$password = "84d7bfa6";
$db = "heroku_1a4d0911e825216";

$link = mysqli_connect($server, $username, $password, $db);

function formatDate($date){
  return date('g:i a', strtotime($date));
}

mysqli_query($link, $query);
$query = "SELECT * FROM chat_data ORDER BY id DESC;";

if($result = mysqli_query($link, $query)){
    while($row = mysqli_fetch_array($result)){
      echo '<tr><td><b>'.$row['name'].'</b> : </td>';
      echo '<td>'.$row['message'].'</td>';
      echo '<td class="date"><b>'.formatDate($row['date']).'</b></td></tr>';
    }
}else{
  echo "It failed. Please Try Again.";
}
?>
