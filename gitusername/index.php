<?php
  include '../config/db.php';
  include '../config/session.php';
  include '../lib/functions.php';

  if (isset($_GET['msg'])) {
    $msg=$_GET['msg'];
  } else {
    $msg='';
  }


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome to WB WEB Code Lab</title>
  </head>
  <body>
    <h1><?php echo $msg; ?></h1>
  </body>
</html>
