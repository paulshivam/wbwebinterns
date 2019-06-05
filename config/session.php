<?php

//check for session
if(!isset($_SESSION)) { session_start(); }

//initite
$_SESSION['DIR']="wbinterns.pe.hu";
$currenttimestamp=date('Y-m-d H:i:s');

//set timezone
date_default_timezone_set('Asia/Kolkata');
setlocale(LC_MONETARY, 'en_IN');

?>
