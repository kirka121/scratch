<link rel="stylesheet" href="assets/css/menu.css">
<div id="menu">
	<div id="menu_header">
		<?php
			if($session->logged_in){
				if(isset($session->username)){
					?><img src="service/getimage.php?u=<?=$session->username;?>" width="25" height="25"><?php
					echo $session->username;
				}
			}
		?>
	</div>
	<?php if(isset($_GET['op']) && $_GET['op'] =="my_settings"){ ?>
		<a href="index.php?op=my_settings&cp=user_edit">Profile</a> <br/>
		<a href="index.php?op=my_settings&cp=user_info&user=<?php echo $session->username; ?>">Account Settings</a> <br/>
		<a href="index.php?op=my_settings&cp=forgot_password">Emails</a> <br/>
		<a href="index.php?op=my_settings&cp=upload_profile_picture">Notification Center</a>
		<a href="#">Billing</a>
		<a href="#">Payment History</a>
	<?php }else{ ?>
		placeholder for more menu
	<?php } ?>


</div>

