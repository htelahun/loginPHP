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
  </head>
  <body>
    <h1>Welcome Company Name - hi
    <?php
    echo "<h2> Hi -{$_SESSION['user_name']}</h2>";
    ?></h1>

  </body>
</html>
