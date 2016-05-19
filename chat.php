<?php
include('db.php');
//$query = "CREATE TABLE IF NOT EXISTS chat_data (id SERIAL PRIMARY KEY, name varchar(30), message text, date timestamp(current_timestamp) );";
//mysqli_query($link, $query);
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
