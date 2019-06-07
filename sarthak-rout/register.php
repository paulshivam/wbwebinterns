<?php
//packages to include
  include '../config/db.php';
  include '../config/session.php';
  include '../lib/functions.php';

//check session
if (isset($_SESSION['id'])) {
  header("Location: index.php?msg=User%20already%20logged%20in");
}

//global data member
  $msg = 0;


//to handle post request for user register
  if (isset($_POST['submit']) and $_POST['submit']=='register'){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $password=password_hash($password,PASSWORD_DEFAULT);


    $found=0;
    if ($query = mysqli_query($mysqli,"SELECT * from users WHERE username = '$username'")) {
      while ($row=mysqli_fetch_array($query)) {
        $found = 1;
        $msg = 'User already exists';
      }
    }
    if (!$found) {
      if($query=mysqli_query($mysqli,"INSERT INTO users (username,password) VALUES('$username','$password')")){
        header("Location: index.php?msg=successful");
      } else {
        header("Location: register.php?msg=notsuccessful");
      }
    }


  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>qwerty</title>
    <?php include '../config/csscdn.php';?>

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
        <button type="button" name="button" onclick="javascript: if(confirm('Are you sure')) location.href='index.php'; ">Return</button>
      </form>
    </div>
    <?php include '../config/jscdn.php'; ?>
  </body>
  <script type="text/javascript">
    <?php
    if ($msg) {
      echo 'alert("'.$msg.'")';
    }
     ?>
  </script>
</html>
