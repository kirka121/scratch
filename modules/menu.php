<link rel="stylesheet" href="assets/css/menu.css">
<!-- If curent page is home page -->
<?php   
	//if logged in
	if($session->logged_in && (!isset($_GET['op']) || $_GET['op'] == "")){ ?>
			<div class="border">
				<table id="menu_user_logged_in_img">
					<tr>
						<td>
							<img src="service/getimage.php?u=<?php echo $session->userinfo['id'];?>">
						</td>
					</tr>
				</table>
			</div>
			<table id="menu_user_logged_in_info">
				<tr>
					<th colspan="100%">
						<?php echo ucfirst($session->userinfo['firstname'])." ".ucfirst($session->userinfo['lastname']);  ?>
					</th>
				</tr>
				<tr>
					<td colspan="100%" class="username">
						<?php echo $session->userinfo['username']; ?>
					</td>
				</tr>
				<tr>
					<td colspan="100%">
						<hr/>
					</td>
				</tr>
				<tr>
					<td class="bullet"><img src="assets/images/icon-company.png"></td>
					<td class="description"><?php echo $session->userinfo['company']; ?></td>
				</tr>
				<tr>
					<td class="bullet"><img src="assets/images/icon-location.png"></td>
					<td class="description"><?php echo $session->userinfo['location']; ?></td>
				</tr>
				<tr>
					<td class="bullet"><img src="assets/images/icon-email.png"></td>
					<td class="description"><a href="mailto: <?php echo $session->userinfo['email']; ?>"><?php echo $session->userinfo['email']; ?></a></td>
				</tr>
				<tr>
					<td class="bullet"><img src="assets/images/icon-url.png"></td>
					<td class="description"><a href="<?php echo $session->userinfo['url']; ?>" target="_blank"><?php echo $session->userinfo['url']; ?></a></td>
				</tr>
				<tr>
					<td class="bullet"><img src="assets/images/icon-member.png"></td>
					<td class="description">Joined on <?php echo date('d.m.Y', $session->userinfo['timestamp']); ?></td>
				</tr>
				<tr>
					<td colspan="100%">
						<hr/>
					</td>
				</tr>
				<tr>
					<td colspan="100%">
						<table id="menu_user_logged_in_stats">
							<tr>
								<th>0</th>
								<th>0</th>
								<th>$0</th>
							</tr>
							<tr>
								<td>Gigs Posted</td>
								<td>Gigs Ran</td>
								<td>Withdrawn</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="100%">
						<hr/>
					</td>
				</tr>
			</table>
	<!-- if logged out -->
	<?php } else if ((!$session->logged_in || $session->logged_in == "" || $session->logged_in == null) || $_GET['op'] == "guest_home"){ ?>
		<div class="border">
				<table id="menu">
					<tr>
						<th>How Giggo Works</th>
					</tr>
					<tr><td colspan="100%"><a class="inner_link"href="index.php?op=guest_home&gh=overview"><div class="link" <?php if(isset($_GET['gh']) && $_GET['gh'] =="overview"){ echo 'id="active_link"';}?>>General Overview</div></a></td></tr>
					<tr><td colspan="100%"><a class="inner_link"href="index.php?op=guest_home&gh=poster_experience"><div class="link" <?php if(isset($_GET['gh']) && $_GET['gh'] =="poster_experience"){ echo 'id="active_link"';}?>>Gig Poster Experience</div></a></td></tr>
					<tr><td colspan="100%"><a class="inner_link"href="index.php?op=guest_home&gh=runner_experience"><div class="link" <?php if(isset($_GET['gh']) && $_GET['gh'] =="runner_experience"){ echo 'id="active_link"';}?>>Gig Runner Experience</div></a></td></tr>
					<tr><td colspan="100%"><a class="inner_link"href="index.php?op=guest_home&gh=giggo_guarantee"><div class="link" <?php if(isset($_GET['gh']) && $_GET['gh'] =="giggo_guarantee"){ echo 'id="active_link"';}?>>Giggo Guarantee</div></a></td></tr>
					<tr><td colspan="100%"><a class="inner_link"href="index.php?op=guest_home&gh=pricing"><div class="link" <?php if(isset($_GET['gh']) && $_GET['gh'] =="pricing"){ echo 'id="active_link"';}?>>Pricing</div></a></td></tr>
					<tr><td colspan="100%"><a class="inner_link"href="index.php?op=guest_home&gh=join_us"><div class="link" <?php if(isset($_GET['gh']) && $_GET['gh'] =="join_us"){ echo 'id="active_link"';}?>>Join Us</div></a></td></tr>
				</table>
			</div>
	<?php
// if current page is control panel (my_settings)
} else if(isset($_GET['op']) && $_GET['op'] =="my_settings"){ ?>
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
		</td></tr>
			<tr><td colspan="100%"><a class="inner_link"href="index.php?op=my_settings&cp=profile"><div class="link" <?php if(isset($_GET['cp']) && $_GET['cp'] =="profile"){ echo 'id="active_link"';}?>>Profile</div></a></td></tr>
			<tr><td colspan="100%"><a class="inner_link"href="index.php?op=my_settings&cp=account_settings"><div class="link" <?php if(isset($_GET['cp']) && $_GET['cp'] =="account_settings"){ echo 'id="active_link"';}?>>Account Settings</div></a></td></tr>
			<tr><td colspan="100%"><a class="inner_link"href="index.php?op=my_settings&cp=emails"><div class="link" <?php if(isset($_GET['cp']) && $_GET['cp'] =="emails"){ echo 'id="active_link"';}?>>Emails</div></a></td></tr>
			<tr><td colspan="100%"><a class="inner_link"href="index.php?op=my_settings&cp=notification_center"><div class="link" <?php if(isset($_GET['cp']) && $_GET['cp'] =="notification_center"){ echo 'id="active_link"';}?>>Notification Center</div></a></td></tr>
			<tr><td colspan="100%"><a class="inner_link"href="index.php?op=my_settings&cp=billing"><div class="link" <?php if(isset($_GET['cp']) && $_GET['cp'] =="billing"){ echo 'id="active_link"';}?>>Billing</div></a></td></tr>
			<tr><td colspan="100%"><a class="inner_link"href="index.php?op=my_settings&cp=payment_history"><div class="link" <?php if(isset($_GET['cp']) && $_GET['cp'] =="payment_history"){ echo 'id="active_link"';}?>>Payment History</div></a></td></tr>
	</table>
</div>
<?php }else{ ?>
		<div id="error">
			nothing
		</div>
<?php } ?>
