<?php

  include '../config/db.php';
  include '../config/session.php';


  if(isset($_GET['getlist']) and $_GET['getlist']=='users') {
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
  }
 ?>
