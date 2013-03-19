<link rel="stylesheet" href="assets/css/user/profile.css">
<script>
  $(document).ready(function(){
    $("#update_profile").validate({
      rules: {
        firstname: "required",
        lastname: "required",
        email: {
          required: true,
          email: true
        },
        url: {
          required: "#newsletter:checked",
          minlength: 2
        },
        company: {
        	"required"
        },
        location: {

        }
      },
      messages: {
        firstname: "Please enter your firstname",
        lastname: "Please enter your lastname",
        email: {
          required: "Please enter a username",
          minlength: "Your username must consist of at least 5 characters"
        },
        url: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        company: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long",
          equalTo: "Please enter the same password as above"
        },
        location: "Please enter a valid email address"
      }
    });
  });
</script>
<table id="my_settings_container">
	<tr>
		<th>Public Profile</th>
	</tr>
	<tr>
		<td>
			<form enctype="multipart/form-data" class="public_profile_form" id="update_profile" action="" method="POST">
				<fieldset>
				<?php if($form->error("profile_picture")){ ?>
			      <p>
			        <label><font size="2" color="#ff0000">Error</font></label>
			        <?php echo $form->error("profile_picture"); ?>
			      </p>
			    <?php } ?>
			    <p>
			      <label for="profile_picture">Profile Picture</label>
			      <img src="service/getimage.php?u=<?=$session->username;?>" width="50" height="50">
				  <input id="profile_picture" name="_upload" type="file" />
			    </p>
			    <?php if($form->error("firstname")){ ?>
			      <p>
			        <label><font size="2" color="#ff0000">Error</font></label>
			        <?php echo $form->error("firstname"); ?>
			      </p>
			    <?php } ?>
			    <p>
			      <label for="firstname">First name</label>
			      <input id="firstname" name="firstname" type="text" value="<?php echo $session->userinfo['firstname'];?>" />
			    </p>
			    <?php if($form->error("lastname")){ ?>
			      <p>
			        <label><font size="2" color="#ff0000">Error</font></label>
			        <?php echo $form->error("lastname"); ?>
			      </p>
			    <?php } ?>
			    <p>
			      <label for="lastname">Last name</label>
			      <input id="lastname" name="lastname" type="text" value="<?php echo $session->userinfo['lastname'];?>" />
			    </p>
			    <?php if($form->error("email")){ ?>
			      <p>
			        <label><font size="2" color="#ff0000">Error</font></label>
			        <?php echo $form->error("email"); ?>
			      </p>
			    <?php } ?>
			    <p>
			      <label for="email">Email</label>
			      <input id="email" name="email" type="email" value="<?php echo $session->userinfo['email'];?>" />
			    </p>
			    <?php if($form->error("url")){ ?>
			      <p>
			        <label><font size="2" color="#ff0000">Error</font></label>
			        <?php echo $form->error("url"); ?>
			      </p>
			    <?php } ?>
			    <p>
			      <label for="url">URL</label>
			      <input id="url" name="url" type="text" value="<?php echo $session->userinfo['url'];?>" />
			    </p>
			    <?php if($form->error("company")){ ?>
			      <p>
			        <label><font size="2" color="#ff0000">Error</font></label>
			        <?php echo $form->error("company"); ?>
			      </p>
			    <?php } ?>
			    <p>
			      <label for="company">Company</label>
			      <input id="company" name="company" type="text" value="<?php echo $session->userinfo['company'];?>" />
			    </p>
			    <?php if($form->error("location")){ ?>
			      <p>
			        <label><font size="2" color="#ff0000">Error</font></label>
			        <?php echo $form->error("location"); ?>
			      </p>
			    <?php } ?>
			    <p>
			      <label for="location">Location</label>
			      <input id="location" name="location" type="text" value="<?php echo $session->userinfo['location'];?>" />
			    </p>
			    <p class="submit_button">
			      <input type="hidden" name="subupdate" value="1">
			      <input class="register_button" type="submit" value="Update">
			    </p>
			</fieldset>
			</form>	
		</td>
	</tr>
</table>