<?php

  //packages to include
  include '../config/db.php';
  include '../config/session.php';
  include '../lib/functions.php';

  //check session
  if (isset($_SESSION['id'])) {
    header("Location: index.php?msg=User%20already%20logged%20in");
  }

  //global variable
  $iderror=$passerror=0;

  //to handle post request for user login
  if (isset($_POST['submit']) and $_POST['submit']=='login'){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $found=0;$iderror='Invalid Id';
    if($query=mysqli_query($mysqli,"SELECT * FROM users WHERE username='$username'"))
      while($row=mysqli_fetch_array($query)){
        $iderror=0;
        if ($password != $row['password']) {
          $passerror='Invalid Password';
        } else {
          //code to do any job on succesful login

          $_SESSION['id']=$row['id'];
          $_SESSION['username']=$row['username'];
          header("Location: index.php?msg=Login%20Successful");
        }
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
      margin:auto;

    }

  </style>
  <body>
    <div class="login">
      <form method="post">
        USERNAME: <input type="text" name="username"  <?php  if ($iderror) echo 'placeholder="'.$iderror.'"  autofocus'; else if(isset($_POST['username'])) echo 'value="'.$_POST['username'].'"'; else echo 'placeholder="Enter username" autofocus'; ?> required><br><br>
        PASSWORD: <input type="password" name="password"  <?php if($passerror) echo 'placeholder="'.$passerror.'" autofocus'; else echo 'placeholder="Enter password"' ;  ?> required><br><br>
        <center><button type="submit" name="submit" value="login" style="background: white;">Log In</button></center>
        <button type="button" name="button" onclick="javascript: if(confirm('Are you sure')) location.href='index.php'; ">Return</button>

      </form>
    </div>


  </body>
</html>
