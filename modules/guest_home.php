<link rel="stylesheet" href="assets/css/guest_home.css">

<div id="guest_home_container">
	<?php
	if(!isset($_GET['gh']) || $_GET['gh'] == ""){
		?>
		<script type="text/javascript">
		window.location.href = "index.php?op=guest_home&gh=overview";
		</script>
		<?php
	} else {
		$req_page = trim($_GET['gh']);
		if (is_file("modules/guest_home/".$req_page.".php")) {
	      	include("modules/guest_home/".$req_page.".php");
	    } else {	
			echo ("<div id='error'>Module could not be found!<br/></div>");
	    }
	}
	?>
</div>