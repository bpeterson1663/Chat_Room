<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["us-cdbr-iron-east-04.cleardb.net"];
$username = $url["b03c8432abf7f1"];
$password = $url["84d7bfa6"];
$db = substr($url["heroku_1a4d0911e825216"], 1);

$link = mysqli_connect($server, $username, $password, $db);


function formatDate($date){
  return date('g:i a', strtotime($date));
}
$query = "CREATE TABLE IF NOT EXISTS chat_data (id SERIAL PRIMARY KEY, name varchar(30), message text, date timestamp(current_timestamp) );";
mysqli_query($link, $query);
$query = "SELECT * FROM chat_data ORDER BY id DESC;";

if($result = mysqli_query($link, $query)){
    while($row = mysqli_fetch_array($result)){
      echo '<tr><td><b>'.$row['name'].'</b> : </td>';
      echo '<td>'.$row['message'].'</td>';
      echo '<td class="date"><b>'.formatDate($row['date']).'</b></td></tr>';
    }
}else{
  echo "It failed";
}
?>
