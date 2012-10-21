<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

MCA - nitk | Surathkal

Project initiated  by :

Name       : Manish Jain (11CA51) and Kausar Neyaz(11CA43)

Project Mentor : Ms. Rashmi

Odd Semester  (2012-13)

-->
<?php session_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>nitk|Surathkal - Master Of Computer Applications</title>

<link href="http://fonts.googleapis.com/css?family=Dancing+Script|Open+Sans+Condensed:300" rel="stylesheet" type="text/css" />
<!--Scripts-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.0" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.0"></script>
<!--Optionals--> 
<script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.3" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.3"></script>
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.3"></script>
<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.6" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.6"></script>
<!---->
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="web.js"></script>
</head>
<body>

<div id="wrapper">
	<div id="menu-wrapper">
		<div id="menu" class="container">
			<ul>
				<li><a href="index.php" title="Home">Homepage</a></li>
				<li><a href="placements.php" title="Placements">Placements</a></li>
				<li><a href="profiles.php" title="Profiles">Profiles</a></li>
				<li><a href="gallery.php" title="Gallery" >Gallery</a></li>
				<li><a href="forum.php" title="MCA Forum">Forum</a></li>
				<li><a href="news.php" title="News @ MCA">News</a></li>
				<?php 
				if((isset($_SESSION['user']))){
				echo"<li><a href=\"logout.php\" title=\"Logout\">$_SESSION[user]</a>";
				include 'connection.php';
				$result = mysql_query("select permit from registration where username='$_SESSION[user]'");
				$row = mysql_fetch_array($result);
				include 'connectionClose.php';
				if($row['permit']==1)
					$permit=1;
				echo"<li><a href=\"#invite\" id=\"invitation\" title=\"Invite\">Invite</a>";
				}
				else
				echo"<li><a href=\"#credentials\" id=\"login\" title=\"Get inside!\">Login</a>";
				?>
			</ul>
		</div>
	</div>
	<div id="logo" class="container">
			<!--Logo-->
			<img src="images/logo.png">
	</div>
</div>

<div id="invite" hidden="true">
<form  action="sendInvite.php" method=post>
	<p class="fancybox"> <b>Registration No. : </b></p>
	<input type="text" size="40" name="regno"/><br/><br/>
	<p class="fancybox"> <b>E-mail : </b></p>
	<input type="text" size="40" name="email"/><br/><br/>
	<?php if(isset($permit))
	{
	echo"<p class=\"fancybox\"><b> Allow to invite others ? </b></p>	
	<input type=\"radio\" name=\"permit\" value=\"1\"/> Yes&nbsp;&nbsp;	
	<input type=\"radio\" name=\"permit\" value=\"0\"/> No<br/><br/>";
	}
	?>
	<input type="submit" value="Send an invite" />
</form>
</div>

<div id="credentials" hidden="true">
		<form  class="fancybox"  action="login.php" method=post >
			<p  class="fancybox" size="40" ><b>Registration No :  </b><br><input type="text" id="regno" name="regno" size="20"/></p><br>
			<p class="fancybox" size="40" ><b>Password         :</b><br><input type="password" id="password" name="password" size="20"/></p>
			<input type="submit" value="Get Inside!"/> 
		</form>
</div>
</body>
</html>