<?php

  //packages to include
  include '../config/db.php';
  include '../config/session.php';

  if (isset($_GET['action']) and $_GET['action']=='edit') {
    $id=$_GET['id'];
    if ($query=mysqli_query($mysqli,"SELECT * FROM users where id=$id")) {
      while ($row=mysqli_fetch_array($query)) {
          echo '<div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">Edit '.$id.'</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>';
      }
    }
  }
?>
