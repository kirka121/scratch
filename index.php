<?php
	include_once("includes/session.php"); 
?>
<!doctype html>
<html>
	<head>
		<title>Giggo - Development Website</title>
		<link rel="stylesheet" href="assets/css/index.css">
		<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"> 
		<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
		<script src="assets/js/jquery.js" type="text/javascript" charset="utf-8"></script>
		<script src="assets/js/jquery.validate.js" type="text/javascript" charset="utf-8"></script>
	</head>
<body>
	<!-- \/ shows the clouds picture -->
	<div id="header" style="background-image:url(assets/images/total-bg.png);background-repeat:repeat-x;">
		<!-- \/ shows the greay half tansparent header -->
		<div id="header_content">
			<!-- \/ centers header items, devides header into 4 columns-->
			<table class="header_links">
				<tr>
					<td><a href="/"><img id="logo" src="assets/images/logo.png"></a></td>
					<td class="padding"><a class="header_link" href="index.php?op=find_gigs"><div id="header_link_container"><img width="20" height="20" src="assets/images/icon-magnifying-glass.png">&nbsp;Find Gigs</div></a></td>
					<td class="padding"><a class="header_link" href="index.php?op=find_runners"><div id="header_link_container"><img width="20" height="20" src="assets/images/icon-magnifying-glass.png">&nbsp;Find Runners</div></a></td>
					<td class="padding">
						<div id="header_link_container" class="show_hide" rel="#slidingDiv">
							<?php if($session->logged_in) { ?>
								<img width="20" height="20" src="assets/images/icon-home.png">
								<a class="header_link" href="" >Control Panel</a>
								<img width="20" height="20" class="arrow" src="assets/images/arrow-down.png">
							<?php } else { ?>
								<img width="20" height="20" src="assets/images/icon-lock.png">
								<a class="header_link" href="" >Login / Register</a>
								<img width="20" height="20" class="arrow" src="assets/images/arrow-down.png">
							<?php } ?>
						</div>
						<?php include("modules/login_form.php"); ?>
					</td>
			</table>
		</div>
	</div>
	<!-- \/ white rounded box -->
	<div id="container">
		<!-- \/ black header inside the box -->
		<div id="container_header">
			<a href="/">Index</a>
			<?php
				if(!isset($_GET['op'])){
					echo "";
				} else {
					$op = $_GET['op'];
					echo " > "."<a href='index.php?op=$op'>".str_replace('_', ' ', $op)."</a>";
				}
			?>
		</div>
		<!-- \/ left side column with menu items -->
		<div id="container_sidebar">
			placeholder for menu
		</div>
		<!-- \/ right side column with content -->
		<div id="container_content">
			<?php
				if (!isset($_GET['op'])) { 
					include("modules/home.php"); 
				} else {
				  	$op = $_GET['op'];
			      	if (is_file("modules/".$op.".php")) {
			      		include("modules/".$op.".php");
			      	} else {	
						echo ("<div id='error'>Module could not be found!<br/></div>");
			      	}
				} 
			?>
		</div>
	</div>
	<!-- \/ shows the people picture -->
	<table class="footer">
		<tr>
			<td style="background-image:url(assets/images/footer.png); width: 1378px; height: 250px;"></td>
		</tr>
	</table>
	<!-- \/ the footer grey area -->
	<div id="footer_extension">
		<!-- \/ centers on footer, divides footer into 4 columns, displays relevant info -->
		<table class="footer_links">
			<tr>
				<th>General</th>
				<th>Quick Links</th>
				<th>Support</th>
				<th>Social Media</th>
			</tr>
			<tr>
				<td>
					<ul>
						<li><a href="#">Lorem ipsum</a></li>
						<li><a href="#">Morbi molestie imperdiet</a></li>
						<li><a href="#">Etiam</a></li>
						<li><a href="#">Vivamus tempus</a> </li>
						<li><a href="#">Nam ac urna</a></li>
					</ul>
				</td>
				<td>
					<ul>
						<li><a href="#">Pellentesque eu</a></li>
						<li><a href="#">Morbi vitae</a></li>
					</ul>
				</td>
				<td>
					<ul>
						<li><a href="#">Suspendisse eget</a></li>
						<li><a href="#">Integer</a></li>
						<li><a href="#">Nunc vitae</a></li>
						<li><a href="#">Aliquam dignissim suscipit</a></li>
						<li><a href="#">Praesent semper</a></li>
						<li><a href="#">Aenean sollicitudin</a></li>
					</ul>
				</td>
				<td class="social_media">
					<a href="https://www.facebook.com/giggocanada" target="_blank"><img src="assets/images/facebook.png"></a>
					<a href="https://twitter.com/giggocanada" target="_blank"><img src="assets/images/twitter.png"></a>
				</td>
			</tr>
		</table>
		<br/>
		Copyright 2013 &copy; Giggo Development Team. All Rights Reserved.
	</div>
</body>
</html>