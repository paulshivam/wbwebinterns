<?php
  include 'config/db.php';
  include 'config/session.php';
  include 'lib/functions.php';

  $mail=$_POST['email']
  $pwd=$_POST['password']

  if(isset($_POST[name])){
    if($mysqli_query("SELECT * FROM users WHERE email=$mail AND password=$pwd")){
      echo "Login validated"
    }
    else{
      echo "Login unsuccessful"
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
  </head>
  <body>

  	<form action="formini.php" method="post">
  		Name <input type="text" name="name" placeholder="John Doe">
  		<br>
  		Email-ID: <input type="text" name="email" placeholder="xyz@abc.com">
  		<br>
  		Password: <input type="text" name="password" placeholder="a1b2c3d4">
  		<br>
  </body>
</html>
