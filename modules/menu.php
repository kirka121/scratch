<link rel="stylesheet" href="assets/css/menu.css">

<div class="border">
	<table id="menu">
		<tr>
			<?php
				if($session->logged_in){
					if(isset($session->username)){
						?>
						<th class="picture"><img src="service/getimage.php?u=<?php echo $session->userinfo['id'];?>" width="25" height="25"></th>
						<th class="username"><?php echo $session->username;?></th><?php
					}
				}
			?>
		</tr>
		<?php if(isset($_GET['op']) && $_GET['op'] =="my_settings"){ ?></td></tr>
			<tr><td colspan="100%"><a class="inner_link"href="index.php?op=my_settings&cp=profile"><div class="link" <?php if(isset($_GET['cp']) && $_GET['cp'] =="profile"){ echo 'id="active_link"';}?>>Profile</div></a></td></tr>
			<tr><td colspan="100%"><a class="inner_link"href="index.php?op=my_settings&cp=account_settings"><div class="link" <?php if(isset($_GET['cp']) && $_GET['cp'] =="account_settings"){ echo 'id="active_link"';}?>>Account Settings</div></a></td></tr>
			<tr><td colspan="100%"><a class="inner_link"href="index.php?op=my_settings&cp=emails"><div class="link" <?php if(isset($_GET['cp']) && $_GET['cp'] =="emails"){ echo 'id="active_link"';}?>>Emails</div></a></td></tr>
			<tr><td colspan="100%"><a class="inner_link"href="index.php?op=my_settings&cp=notification_center"><div class="link" <?php if(isset($_GET['cp']) && $_GET['cp'] =="notification_center"){ echo 'id="active_link"';}?>>Notification Center</div></a></td></tr>
			<tr><td colspan="100%"><a class="inner_link"href="index.php?op=my_settings&cp=billing"><div class="link" <?php if(isset($_GET['cp']) && $_GET['cp'] =="billing"){ echo 'id="active_link"';}?>>Billing</div></a></td></tr>
			<tr><td colspan="100%"><a class="inner_link"href="index.php?op=my_settings&cp=payment_history"><div class="link" <?php if(isset($_GET['cp']) && $_GET['cp'] =="payment_history"){ echo 'id="active_link"';}?>>Payment History</div></a></td></tr>
		<?php }else{ ?>
			<tr><td class="link" colspan="100%"><div class="link">placeholder for more menu</div></td></tr>
		<?php } ?>
	</table>
</div>

