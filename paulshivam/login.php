<?php

//packages to include
  include '../config/db.php';
  include '../config/session.php';
  include '../lib/functions.php';

  //check session
  if(isset($_SESSION['id'])) {
    header('Location: index.php?msg=User%20already%20logged%20in');
  }

  //global variable
  $iderror=$passerror=0;

  //to handle post request for user login
  if (isset($_POST['submit']) and $_POST['submit']=='login') {

    $username=$_POST['username'];
    $password=$_POST['password'];
    $found=0; $iderror=0; $passerror=0;
    if($query=mysqli_query($mysqli,"SELECT * FROM users WHERE username='$username'"))
      while ($row=mysqli_fetch_array($query)) {
        $iderror=0;
        if(password_verify($password,$row['password'])) {
          //code to do any job on successful login
          $_SESSION['id']=$row['id'];
          $_SESSION['username']=$row['username'];
          header("Location: index.php?msg=Login%20successful");
        } else {
          $passerror='Invalid Password';
           echo "string";
        }
      }
    }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form</title>
    <style media="screen">
  		form {
  			text-align: center;
  			background-color: lightgray;
  			width: 40%;
  			padding: 10px 50px;
  			border: 1px dotted blue;
  			margin: 50px auto;
  		}
  	</style>
    <?php include"../config/csscdn.php" ?>
  </head>
  <body>

  	<form method="post">
  		Username: <input type="text" name="username" placeholder="johndoe">
  		<br>
  		Password: <input type="password" name="password" placeholder="a1b2c3d4">
  		<br>
      <button type="submit" name="submit" value="login">Submit</button>
      <?php include '../config/jscdn.php' ?>
  </body>

</html>
