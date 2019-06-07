<?php

//packages to include
  include '../config/db.php';
  include '../config/session.php';
  include '../lib/functions.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <?php include"../config/csscdn.php" ?>
  </head>
  <body>

      <table border="1">
        <thead>
          <th>No</th>
          <th>Username</th>
          <th>Password</th>
          <th>Action</th>7
        </thead>
        <tbody>

            <?php

              if ($query=mysqli_query($mysqli,"SELECT * FROM users")) {
                  while ($row=mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo '<td>'.$row['id'].'</td>';
                    echo '<td>'.$row['username'].'</td>';
                    echo '<td>'.$row['password'].'</td>';
                    echo '<td align="center"><i class="fa fa-pencil-square" aria-hidden="true" style="color:orange"></i>&nbsp;<i class="fa fa-times" aria-hidden="true" style="color:red"></i></td>';
                    echo "</tr>";

                  }
              }
             ?>
        </tbody>
        <tfoot>
          <th>No</th>
          <th>Username</th>
          <th>Password</th>
          <th>Action</th>7
        </tfoot>

      </table>
      <?php include '../config/jscdn.php' ?>
  </body>

</html>
