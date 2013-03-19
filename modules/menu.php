<link rel="stylesheet" href="assets/css/menu.css">
<div class="border">
	<table id="menu">
		<tr>
			<?php
				if($session->logged_in){
					if(isset($session->username)){
						?>
						<th class="picture"><img src="service/getimage.php?u=<?php echo $session->username;?>" width="25" height="25"></th>
						<th class="username"><?php echo $session->username;?></th><?php
					}
				}
			?>
		</tr>
		<?php if(isset($_GET['op']) && $_GET['op'] =="my_settings"){ ?></td></tr>
			<tr><td colspan="100%"><a class="inner_link"href="index.php?op=my_settings&cp=user_edit"><div class="link">Profile</div></a></td></tr>
			<tr><td colspan="100%"><a class="inner_link"href="index.php?op=my_settings&cp=user_info&user=<?php echo $session->username; ?>"><div class="link">Account Settings</div></a></td></tr>
			<tr><td colspan="100%"><a class="inner_link"href="index.php?op=my_settings&cp=forgot_password"><div class="link">Emails</div></a></td></tr>
			<tr><td colspan="100%"><a class="inner_link"href="index.php?op=my_settings&cp=upload_profile_picture"><div class="link">Notification Center</div></a></td></tr>
			<tr><td colspan="100%"><a class="inner_link"href="#"><div class="link">Billing</div></a></td></tr>
			<tr><td colspan="100%"><a class="inner_link"href="#"><div class="link">Payment History</div></a></td></tr>
		<?php }else{ ?>
			<tr><td class="link" colspan="100%"><div class="link">placeholder for more menu</div></td></tr>
		<?php } ?>
	</table>
</div>

