<?php
// $host = 'localhost';
// $user = "root";
// $password = "root";
// $db = "chat";
//$link = mysqli_connect($host, $user, $password, $db);

// $host = 'ec2-54-235-183-5.compute-1.amazonaws.com';
// $user = "gxclfpeyaozoau";
// $password = "63w_PWrjRJ53rwSiwkv9DTq_hh";
// $db = "d1g0gsrv6ujq1p";
//
// $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
//
// $server = $url["host"];
// $username = $url["user"];
// $password = $url["pass"];
// $db = substr($url["path"], 1);
// $link = pg_connect("host=".$host." dbname=".$db." user=".$user." password=".$password."");
//$link = mysqli_connect($server, $username, $password, $db);

if(process.env.DATABASE_URL) {//connecting to outside heroku database
  pg.defaults.ssl = true;
  $link = process.env.DATABASE_URL;
} else{//connecting to local database before being connected to heroku for testing purposes
  $link = 'postgress://localhost:5432/taskOrganizer';
}
function formatDate($date){
  return date('g:i a', strtotime($date));
}
 ?>
