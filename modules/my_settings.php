<link rel="stylesheet" href="assets/css/my_settings.css">
<div id="my_settings">
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