<?php

  //packages to include
  include '../config/db.php';
  include '../config/session.php';

  if (isset($_GET['action']) and $_GET['action']=='delete') {
    $id=$_GET['id'];
    if ($query=mysqli_query($mysqli,"DELETE FROM users WHERE id=$id")) {
      echo "1";
    }
  }

?>
