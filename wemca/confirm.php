<?php
	session_start();
	session_destroy();
	include 'header.php' 
 ?>
<html>
<body>
<div id="wrapper">
	<div class="divider">&nbsp;</div>
	<div id="page" class="container">
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#"> </a>Welcome to <b>mca</b>&nbsp;&nbsp;&nbsp;@&nbsp;&nbsp;&nbsp;nitk|surathkal</h2>
				<div class="entry">
					<?php
						if(isset($_GET['passkey']))
						{
							$pass=$_GET['passkey'];
							include 'connection.php';
							$result = mysql_query("select * from temp_registration where passkey='$pass'");
							$row=mysql_fetch_array($result);
							$count=mysql_num_rows($result);
							if($count==1)
							{
								echo"<pre width=\"30\">Hi!!<b> $row[regno]</b></pre>";
							}
							else
							{
								header("location:index.php");
							}	
							include 'connectionClose.php';
						}
						else
						{
							header("location:index.php");
						}
	
					?>
					
					<form  action="register.php" method=post>
						<p class="fancybox"> <pre width="30" ><b>Username : </b></pre>
						<input type="text" size="50" name="username"/><br/></p>
						<p class="fancybox"> <pre width="30" ><b>E - mail : </b></pre>
						<input type="text" size="50" name="emails	" disabled value="<?php echo"$row[email]"?>"/><br/></p>
						<input type="text" size="50" name="email" hidden="true" value="<?php echo"$row[email]"?>"/><br/></p>
						<p class="fancybox"> <pre width="30" ><b>Password : </b></pre>
						<input type="password" size="50" name="pass"/><br/></p>
						<input type="text" name="invited" value="<?php echo"$row[invited]"?>" hidden="true"/>
						<input type="text" name="regno" value="<?php echo"$row[regno]"?>" hidden="true"/>
						<input type="text" name="permit" value="<?php echo"$row[permit]"?>" hidden="true"/>
						<input type="submit" value="Accept Invitation" />
					</form>
				</div>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<div>
				<h2>Nulla luctus eleifend</h2>
				<ul class="list-style1">
					<li class="first"><a href="#">Pellentesque quis elit non lectus gravida blandit.</a></li>
					<li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
					<li><a href="#">Phasellus nec erat sit amet nibh pellentesque congue.</a></li>
					<li><a href="#">Cras vitae metus aliquam risus pellentesque pharetra.</a></li>
					<li><a href="#">Phasellus nec erat sit amet nibh pellentesque congue.</a></li>
					<li><a href="#">Maecenas vitae orci vitae tellus feugiat eleifend.</a></li>
				</ul>
			</div>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
	<div class="divider">&nbsp;</div>
	<div id="three-column" class="container">
		<div id="tbox1">
			<div class="box-style">
				<div class="image"><img src="images/img07.jpg" width="320" height="170" alt="" /></div>
				<div class="arrow"></div>
				<div class="content">
					<h2>Fusce ultrices fringilla</h2>
					<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. </p>
				</div>
			</div>
		</div>
		<div id="tbox2">
			<div class="box-style">
				<div class="image"><img src="images/img08.jpg" width="320" height="170" alt="" /></div>
				<div class="arrow"></div>
				<div class="content">
					<h2>Mauris vulputate dolor</h2>
					<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. </p>
				</div>
			</div>
		</div>
		<div id="tbox3">
			<div class="box-style">
				<div class="image"><img src="images/img09.jpg" width="320" height="170" alt="" /></div>
				<div class="arrow"></div>
				<div class="content">
					<h2>Nulla luctus eleifend </h2>
					<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="footer-content" class="container">
	<div id="footer-bg">
		<div id="column1">
			<h2>Welcome to my website</h2>
			<p>In posuere eleifend odio quisque semper augue mattis wisi maecenas ligula. Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum. Quisque dictum integer nisl risus, sagittis convallis, rutrum id, congue, and nibh. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. Suspendisse dictum porta lectus.<br />
			</p>
		</div>
		<div id="column2">
			<h2>Etiam rhoncus volutpat</h2>
			<ul class="list-style2">
				<li class="first"><a href="#">Pellentesque quis elit non lectus gravida blandit.</a></li>
				<li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
				<li><a href="#">Phasellus nec erat sit amet nibh pellentesque congue.</a></li>
				<li><a href="#">Cras vitae metus aliquam risus pellentesque pharetra.</a></li>
				<li><a href="#">Maecenas vitae orci vitae tellus feugiat eleifend.</a></li>
			</ul>
		</div>
		<div id="column3">
			<h2>Recommended Links</h2>
			<ul class="list-style2">
				<li class="first"><a href="#">Pellentesque quis elit non lectus gravida blandit.</a></li>
				<li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
				<li><a href="#">Phasellus nec erat sit amet nibh pellentesque congue.</a></li>
				<li><a href="#">Cras vitae metus aliquam risus pellentesque pharetra.</a></li>
				<li><a href="#">Maecenas vitae orci vitae tellus feugiat eleifend.</a></li>
			</ul>
		</div>
	</div>
</div>
<?php include 'footer.php' ?>
</body>
</html>
