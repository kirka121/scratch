<link rel="stylesheet" href="assets/css/user/email.css">

<table id="my_settings_container">
	<tr>
		<th colspan="100%">Change Password</th>
	</tr>
	<tr>
		<td class="email">
			kirka121@gmail.com
		</td>
		<td class="button_verify">
			<p class="submit_button">
		      <input type="hidden" name="sub_verify_email" value="1">
		      <input class="grey_button" type="submit" value="Verify">
		    </p>
		</td>
		<td class="button_delete">
			<p class="submit_button">
		      <input type="hidden" name="sub_delete_email" value="1">
		      <input class="grey_button" type="submit" value="Delete">
		    </p>
		</td>
	</tr>
	<tr>
		<td  class="left_padding">
			<form class="public_profile_form" id="update_profile" action="" method="POST">
				<?php if($form->error("profile_picture")){ ?>
			      <p>
			        <label><font size="2" color="#ff0000">Error</font></label>
			        <?php echo $form->error("profile_picture"); ?>
			      </p>
			    <?php } ?>
			    <p>
			    	add another email address
			    </p>
			    <p class="submit_button">
			      <input id="profile_picture" name="profile_picture" type="text" />
			      <input type="hidden" name="sub_change_pass" value="1">
			      <input class="register_button" type="submit" value="Add Email"> 
			    </p>
			</form>	
		</td>
	</tr>
</table>