<?php
  include('db.php');
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chat Project</title>
    <script src="vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="ajax_script.js" type="text/javascript"></script>
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="styles/style.css" rel="stylesheet" />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1>Welcome To Brady's Chat Room</h1>
          <div id="chatBox">
            <table id="chatData" class="table table-striped">
              <tbody>

              </tbody>
            </table>
          </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <form method="post" action="index.php">
          <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="Name"/>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" placeholder="Enter Message"></textarea>
          </div>

          <input class="btn btn-success" type="submit" name="submit" value="Send"/>
        </form>
        <?php
        if($_POST['submit']){
            $name = $_POST['name'];
            $message = $_POST['message'];

            $query = "INSERT INTO chat_data (name , message) values ('".$name."','".$message."');";
            if($result = mysqli_query($link, $query)){
              echo '<embed loop="false" src="bleep.mp3" hidden="true" autoplay="true"  />';
            }
        }

         ?>
      </div>
    </div>
    </div>
  </body>
</html>
