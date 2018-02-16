<?php
//init_set('display_errors', 1);//mac
//error_reporting(E_All); //mac

require_once('phpscripts/config.php');
 confirm_logged_in();



 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CMS Portal</title>
      <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <h1 class="title">
    <?php
    echo "<h1 > Hi {$_SESSION['user_name']} welcome!</h1>";
    ?>
    </h1>
    
    <p><?php
    if (isset($_GET['user_date'])) {

      $date=$_GET['user_date'];

      $myQuery = "SELECT {$date} FROM tbl_user WHERE user_id={$id}";
    //echo $myQuery;
      $result = mysqli_query($link, $myQuery);
    //echo $result;
      //$row = mysqli_fetch_assoc($result);
    }
echo "<p> {$result} </p>";
    ?></p>

  </body>
</html>
