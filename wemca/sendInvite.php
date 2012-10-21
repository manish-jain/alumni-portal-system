<?php
session_start();
include 'connection.php';
$invited=$_SESSION['user'];
$email=$_POST['email'];
$regno=$_POST['regno'];
if(!isset($_POST['permit']))
{
$result = mysql_query("select regno from registration where username='$_SESSION[user]'");
$row=mysql_fetch_array($result);
$result = mysql_query("insert into pending_invitations values('$row[regno]','$email','$regno',curdate())");
}
else
{
$permit=$_POST['permit'];
$passkey=md5(uniqid(rand()));
//$result = mysql_query("delete from pending_invitations where email='$email'");
$result = mysql_query("select email,regno from registration where username='$_SESSION[user]'");
$row=mysql_fetch_array($result);
$result = mysql_query("insert into temp_registration values('$passkey','$row[regno]','$email','$permit','$regno',curdate())");
$to = $email;
include 'connectionClose.php';
$from=$row['email'];
$subject = "Invitation to join nitk|Surathkal - Master Of Computer Applications";
$message = "Hello,\n\nhere's a chance to connect what's happening at NITK MCA. \n\nTo connect please click the link below : \n http://localhost/wemca/confirm.php?passkey=$passkey" ;
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
}
header("location:index.php#pending");
?>