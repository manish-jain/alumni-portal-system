	<?php include 'header.php' ?>
<html>
<body>
<div id="wrapper">
	<div class="divider">&nbsp;</div>
	<div id="page" class="container">
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Profile Information : </a></h2>
				<div class="entry" id="information" >
					<div id="headings">
					<form action="saveprofile.php" method=post>
					<?php
						$edit="disabled";
						if (isset($_GET['edit']))
						{
							if(($_GET['edit'])==1)
							{
								$edit="enabled";
							}
							else
							{
								$edit="disabled";
							}
						}
						else
						{
							$edit="disabled";
						}
					?>
						<div style="background-image:url('images/section.png')">
							<p style="color:white;"><b>&nbsp;&nbsp;&nbsp;&nbsp;General information</b></p> 
						</div>
						<table style="color:black">
							<tr>
								<td size="20">Name</td>
								<td size="20">:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" <?php echo $edit; ?> size="20" /></td>
							</tr>
							<tr>
								<td size="20">Roll No.</td>
								<td size="20">:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="regnos" <?php echo $edit; ?> size="20"/></td>
							</tr>
						</table>
					</form>
					</div>
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
				<?php include 'connection.php';
					$result=mysql_query("select permit from registration where username='$_SESSION[user]'");
					$row=mysql_fetch_array($result);
					if($row['permit']==1)
					{
						echo "<h2>Pending Invitations</h2>
						<div id=\"pending\">";
							$result=mysql_query("select * from pending_invitations order by addate desc LIMIT 0,1");
							$count=mysql_num_rows($result);
							if($count==0)
							{echo "No pending invitations.";}
							else
							{
								while($row=mysql_fetch_array($result))
								{
									echo "<p> Registration No. : $row[regno]<br>Email : $row[email]<br>Invited by : $row[invited] on $row[addate]</p>";
									echo "<form action=\"sendInvite.php\" method=post>
									<input type=\"text\" value=\"$row[regno]\" name=\"regno\" hidden=\"true\">
									<input type=\"text\" value=\"$row[email]\" name=\"email\" hidden=\"true\">
									<input type=\"radio\" value=\"1\" name=\"permit\">Allow to invite others.
									<input type=\"radio\" value=\"0\" name=\"permit\">Don't allow.<br>
									<input type=\"submit\" value=\"Invite\"></form><br>";
									echo "<form action=\"destroyInvite.php\" method=post>
									<input type=\"text\" value=\"$row[email]\" name=\"email\" hidden=\"true\">
									<input type=\"submit\" value=\"Decline Invitation\"></form>";
								}
						
						}
						echo"</div>	";
					}
			else
				{
					echo"
						<h2>Etiam rhoncus volutpat</h2>
						<ul class=\"list-style2\">
						<li class=\"first\"><a href=\"#\">Pellentesque quis elit non lectus gravida blandit.</a></li>
						<li><a href=\"#\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
						<li><a href=\"#\">Phasellus nec erat sit amet nibh pellentesque congue.</a></li>
						<li><a href=\"#\">Cras vitae metus aliquam risus pellentesque pharetra.</a></li>
						<li><a href=\"#\">Maecenas vitae orci vitae tellus feugiat eleifend.</a></li>
						</ul>";
				}
				include 'connectionClose.php';
					
					?>
				
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
