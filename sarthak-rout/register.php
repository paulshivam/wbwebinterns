<?php
  include '../config/db.php';
  include '../config/session.php';
  include '../lib/functions.php';
  if (isset($_POST['submit']) and $_POST['submit']=='register'){
    $username=$_POST['username'];
    $pwd=$_POST['password'];

    if($query=mysqli_query("INSERT INTO users (username,password) VALUES('$username','$password')")){
      header("Location login.php?msg=succesful");
    } else {
      header("Location register.php?msg=notsuccesful");
    }

  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>qwerty</title>
  </head>
  <style>
    .login{
      border: 2px solid blue;
      width: 300px;
      height: 150px;
      padding-top: 20px;
      padding-left: 20px;
      background: #398;
      margin:auto;s

    }

  </style>
  <body>
    <div class="login">
      <form method="post">
        USERNAME: <input type="text" name="username" placeholder="Enter username"><br><br>
        PASSWORD: <input type="password" name="password" placeholder="Enter password"><br><br>
        <center><button type="submit" name="submit" value="register" style="background: white;">Register</button></center>
        <button type="button" name="button" onclick="javascript: if(confirm('Are you sure')) history.go(-1); ">Go Back</button>
      </form>
    </div>


  </body>
</html>
