<link rel="stylesheet" href="assets/css/my_settings.css">
<div id="my_settings">
	<a href="index.php?op=my_settings&cp=user_edit">change password</a> | <a href="index.php?op=my_settings&cp=user_info">update personal information</a> | <a href="index.php?op=my_settings&cp=forgot_password">forgot pass</a> | <a href="index.php?op=my_settings&cp=upload_profile_picture">update profile picture</a>
	<br />


	<?php
	if(!isset($_GET['cp']) || $_GET['cp'] == ""){
		include("user/home.php"); 
	} else {
		$req_page = trim($_GET['cp']);
		if (is_file("modules/user/".$req_page.".php")) {
	      	include("modules/user/".$req_page.".php");
	    } else {	
			echo ("<div id='error'>Module could not be found!<br/></div>");
	    }
	}
	?>
</div>