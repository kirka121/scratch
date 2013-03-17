<link rel="stylesheet" href="assets/css/menu.css">
<div id="menu">

	<?php if(isset($_GET['op']) && $_GET['op'] =="my_settings"){ ?>
		<a href="index.php?op=my_settings&cp=user_edit">change password</a> <br/>
		<a href="index.php?op=my_settings&cp=user_info&user=<?php echo $session->username; ?>">update personal information</a> <br/>
		<a href="index.php?op=my_settings&cp=forgot_password">forgot pass</a> <br/>
		<a href="index.php?op=my_settings&cp=upload_profile_picture">update profile picture</a>
	<?php }else{ ?>
		placeholder for more menu
	<?php } ?>


</div>