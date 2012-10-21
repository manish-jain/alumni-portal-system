<?php
session_start();
include 'connection.php';
$mail=$_POST['email'];
$result=mysql_query("delete from pending_invitations where email='$mail'");
include 'connectionClose.php';
header("location:index.php#pending");
?>