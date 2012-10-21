<?php
session_start();
include 'connection.php';
$item1=$_POST['regno'];
$item2=$_POST['email'];
$item3=$_POST['pass'];
$item4=$_POST['invited'];
$item5=$_POST['username'];
$item6=$_POST['permit'];
//$result=mysql_query("insert into registration values('$item1','$item2','$item3','$item4','$item5','$item6')");
$result=mysql_query("delete from temp_registration where regno='$item1'");
$a=mysql_fetch_array($result);
echo"$a.length";
echo $a[0];
include 'connectionClose.php';
session_destroy();
<script>
alert("You have registered successfully, now you can login.")	;
</script>
//header("location:index.php");
?>