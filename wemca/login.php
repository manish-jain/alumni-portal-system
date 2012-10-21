<?php 
session_start();
include 'connection.php';
if(isset($_SESSION['user']))
header("location:index.php");
$result = mysql_query("select username from registration where regno='$_POST[regno]' and pass='$_POST[password]'");
$row = mysql_fetch_array($result);
if($row['username']!=NULL && mysql_num_rows($result)==1)
$_SESSION['user']=$row['username'];
header("location:index.php");
include 'connectionClose.php';
?>