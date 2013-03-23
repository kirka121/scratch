<link rel="stylesheet" href="assets/css/guest_home.css">
<link href="assets/slider/js-image-slider.css" rel="stylesheet" type="text/css" />
<script src="assets/slider/js-image-slider.js" type="text/javascript"></script>
<div id="sliderFrame">
	<div id="slider">
	    <img src="assets/slider/image-slider-1.jpg" alt="" />
	    <img src="assets/slider/image-slider-2.jpg" alt="" />
	    <img src="assets/slider/image-slider-3.jpg" alt="" />
	    <img src="assets/slider/image-slider-4.jpg" alt="" />
	    <img src="assets/slider/image-slider-5.jpg" alt="" />
	</div>
</div>
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