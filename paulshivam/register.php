<?php
//packages to include
include '../config/db.php';
include '../config/session.php';
include '../lib/functions.php';

//check session
if (isset($_SESSION['id'])) {
  header("Location: index.php?msg=User%20already%20logged%20in");
}

$msg=0; //global data member

if (isset($_POST['submit']) and $_POST['submit']=='register'){
  $username=$_POST['username'];
  $password=$_POST['password'];

  $found=0;
  if($query=mysqli_query($mysqli,"SELECT * FROM users where username='$username'")) {
    while($row=mysqli_fetch_array($query)) {
      $found=1;
      $msg="User already exists!";

    }
  }
  if(!$found){
    $hashed=password_hash($password,PASSWORD_DEFAULT);
    if($query=mysqli_query($mysqli,"INSERT INTO users (username, password) VALUES ('$username','$hashed')")){
      header("Location: index.php?msg=successful");
    } else {
      header("Location: register.php?msg=unsuccessful");
    }

  }
}

 ?>


 <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Register</title>
    </head>
    <body>

<form method="post">


     Username: <input type="text" name="username" value=""> <br> <br>
     Password: <input type="password" name="password" value=""> <br> <br>
     <button type="submit" name="submit" value="register">Register</button> &nbsp;&nbsp;&nbsp;&nbsp;
     <button type="button" name="button" onclick="javascript: if(confirm('Are you sure?')) location.href='index.php'">Return</button>
    </body>

</form>
    <script type="text/javascript">
    <?php if($msg){
      echo 'alert("'.$msg.'")';
    }
    ?>
    </script>
  </html>
