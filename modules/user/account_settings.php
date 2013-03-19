<link rel="stylesheet" href="assets/css/user/account_settings.css">

<table id="my_settings_container">
	<tr>
		<th>Change Password</th>
	</tr>
	<tr>
		<td>
			<form class="public_profile_form" id="update_profile" action="" method="POST">
				<fieldset>
				<?php if($form->error("profile_picture")){ ?>
			      <p>
			        <label><font size="2" color="#ff0000">Error</font></label>
			        <?php echo $form->error("profile_picture"); ?>
			      </p>
			    <?php } ?>
			    <p>
			      <label for="profile_picture">Old Password</label>
			      <input id="profile_picture" name="profile_picture" type="text" />
			    </p>
			    <?php if($form->error("firstname")){ ?>
			      <p>
			        <label><font size="2" color="#ff0000">Error</font></label>
			        <?php echo $form->error("firstname"); ?>
			      </p>
			    <?php } ?>
			    <p>
			      <label for="firstname">New Password</label>
			      <input id="firstname" name="firstname" type="text" />
			    </p>
			    <?php if($form->error("lastname")){ ?>
			      <p>
			        <label><font size="2" color="#ff0000">Error</font></label>
			        <?php echo $form->error("lastname"); ?>
			      </p>
			    <?php } ?>
			    <p>
			      <label for="lastname">Confirm Password</label>
			      <input id="lastname" name="lastname" type="text" />
			    </p>
			    <p class="submit_button">
			      <input type="hidden" name="sub_change_pass" value="1">
			      <input class="register_button" type="submit" value="Update">  <a  class="inner_link" href="#">Forgot your password?</a>
			    </p>
			</fieldset>
			</form>	
		</td>
	</tr>
</table>
<br/>
<br/>
<table id="my_settings_container">
	<tr>
		<th>Delete Account</th>
	</tr>
	<tr>
		<td>
			<form class="public_profile_form" id="update_profile" action="" method="POST">
				<fieldset>
				<p>
					Once you delete your account, there is no going back. Please be certain.
				</p>
			    <p class="submit_button">
			      <input type="hidden" name="sub_delete_account" value="1">
			      <input class="delete_button" type="submit" value="Delete">
			    </p>
			</fieldset>
			</form>	
		</td>
	</tr>
</table>
