<?php
  include '../config/db.php';
  include '../config/session.php';

  //type your php here code here



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
  </head>
  <body>
    <form method="post">
      <label>Username</label>
      <!-- Modify userid/pass field as per requirements -->
      <input id="userid" type="text" name="" value="">
      <br>
      <label>Password</label>
      <input id="pass" type="password" name="" value="">
      <br>
      <button id="submit" type="submit" name="submit">Submit</button>
    </form>
  </body>
</html>
