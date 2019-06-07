<?php

  //packages to include
  include '../config/db.php';
  include '../config/session.php';
  include '../lib/functions.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>DATABASE</title>
    <?php include '../config/csscdn.php';?>

  </head>

  <body>
    <table border="1">
      <thead>
        <th>ID</th>
        <th>USERNAME</th>
        <th>PASSWORD</th>
        <th>ACTION</th>
      </thead>
      <tbody>
        <?php
          if ($query=mysqli_query($mysqli,"SELECT * FROM users")) {
            while ($row=mysqli_fetch_array($query)) {
                echo '<tr>
                  <td>'.$row['id'].'</td>
                  <td>'.$row['username'].'</td>
                  <td>'.$row['password'].'</td>
                  <td align="center"><i onclick="remove('.$row['id'].')" class="fa fa-times-circle" aria-hidden="true" style="color:red"></i>&nbsp;&nbsp;<i class="fa fa-pencil-square" aria-hidden="true" style="color:orange"></i>

</td>
                </tr>';
            }
          }
         ?>
      </tbody>
      <tfoot>
        <th>ID</th>
        <th>USERNAME</th>
        <th>PASSWORD</th>
        <th>ACTION</th>
      </tfoot>
    </table>
    <button type="button" name="button" onclick="javascript: if(confirm('Are you sure')) location.href='index.php'; ">Go Back</button>
    <?php include '../config/jscdn.php'; ?>

  </body>
</html>
