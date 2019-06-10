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
        <tbody id="users-list">

            <?php

              if ($query=mysqli_query($mysqli,"SELECT * FROM users")) {
                  while ($row=mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo '<td>'.$row['id'].'</td>';
                    echo '<td>'.$row['username'].'</td>';
                    echo '<td>'.$row['password'].'</td>';
                    echo '<td align="center">
                    <i onclick="javascript: edit('.$row['id'].');" class="fa fa-pencil-square" aria-hidden="true" style="color:orange"></i>&nbsp;
                    <i onclick="javascript: remove('.$row['id'].');" class="fa fa-times" aria-hidden="true" style="color:red" ></i>
                    </td>';
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
      <script>
        function remove(id) {
          if(confirm("Do you really want to remove " + id + "?"))
            delete_id(id);
        }

          function delete_id(id) {
            $.ajax({
              url: 'action.php',
              type: 'GET',
              data: {
                action: 'delete',
                id: id
              },
              datatype: 'html',
              success: function(response) {
                if(response==1) {
                  refresh_users();
                  notify(id,'Deleted successfully');
                }
              }
          });
          }

          function refresh_users() {
            $("body").hide();
            $("#users-list").empty();
            $.ajax({
              url: 'list.php',
              type: 'GET',
              data: {
                getlist: 'users'
              },
              datatype:   'html',
              success: function(response) {
                $("#users-list").html(response);
                $("body").show();
              }
            });
          }

          function edit(id) {
            $("#editModalbody").empty();
            $.ajax({
              url: "modal.php",
              type: 'get',
              data: {
                id: id;
                action: 'edit'
              },
              datatype: 'html',
              success: function(response){
                $("#editModalbody").html(response);
              }
            });

            $("editModal").modal("show");
          };

      </script>
  </body>

  <!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" id="editModalbody">

    </div>
  </div>
</div>

</html>
