<?php include 'header.php' ?>
<html>
<body>
<div id="wrapper">
	<div class="divider">&nbsp;</div>
	<div id="page" class="container">
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#"> </a></h2>
				<div class="entry">
					<p>This is <strong>TrendyBiz </strong>, a free, fully standards-compliant CSS template designed by <a href="http://www.freecsstemplates.org">FCT</a>.     The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attributions 3.0</a> license, so you are pretty much free to do whatever you want with it (even use it commercially) provided you keep the links in the footer intact. Aside from that, have fun with it :) </p>
					<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus <a href="#">dapibus semper urna</a>. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis,  egestas at sem.  Mauris quam enim,  in, rhoncus ut, lobortis a, est. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer. </p>
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
