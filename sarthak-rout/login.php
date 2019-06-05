<?php
  include '../config/db.php';
  include '../config/session.php';
  include '../lib/functions.php';
  if (isset($_POST['submit']) and $_POST['submit']=='login'){
    $username=$_POST['username'];
    $pwd=$_POST['password'];
    $found=0;
    if($query=mysqli_query("SELECT * FROM users WHERE username='$username' AND password='$pwd'"))
      while($row=$mysqli_fetch_array($query))
        $found = 1;

    if ($found == 1){
      echo "Login Successful";
    }
    else{
      echo "Login Unsuccessful";
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
        <center><button type="submit" name="submit" value="login" style="background: white;">Log In</button></center>
        <button type="button" name="button" onclick="javascript: if(confirm('Are you sure')) location.href='index.php'; ">Return</button>

      </form>
    </div>


  </body>
</html>
