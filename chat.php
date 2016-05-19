<?php
include('db.php');
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
