<?php
//initialise database connection variables
$databaseHost = '213.190.7.5'; //public db host
$databaseName = 'u660698074_db';
$databaseUsername = 'u660698074_user';
$databasePassword = 'db@user@123';

//create connection
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

?>
