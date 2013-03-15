<link rel="stylesheet" href="assets/css/login.css">
<script src="assets/js/showHide.js" type="text/javascript"></script>
<script>
  $(document).ready(function(){
    $("#login_request").validate({
      rules: {
        user: {
          required: true,
          minlength: 5
        },
        pass: {
          required: true,
          minlength: 5
        }
      },
      messages: {
        user: {
          required: "Please enter a username",
          minlength: "5 characters minimum"
        },
        pass: {
          required: "Please provide a password",
          minlength: "5 characters minimum"
        }
      }
    });
  });
</script>
<script type="text/javascript">
	$(document).ready(function(){
	   $('.show_hide').showHide({			 
			speed: 500,  // speed you want the toggle to happen	
			changeText: 1, // if you dont want the button text to change, set this to 0
			showText: 'Login / Register',// the button text to show when a div is closed
			hideText: 'Login / Register' // the button text to show when a div is open				 
		}); 
	});
</script>

<div id="slidingDiv">
	<?php
		if($session->logged_in){
			//user loggen in
			?>
			<table class="login_table">
				<tr>
					<td>
						<br/>
						<form action="includes/user/process.php" method="POST" name="logout_request">
							<input type="hidden" name="sublogout" value="1">
							<a href="#" class="login_button" onclick="document.logout_request.submit()">Logout</a>
					   	</form>
				   </td>
				</tr>
			</table>
		   	<?php
		} else {
			//user logged out ?> 
			<form action="includes/user/process.php" method="POST" name="login_request" id="login_request">
				<table class="login_table">
					<tr>
						<td>
							<p>
								<label for="user"><div id="server_side_error"><?php echo $form->error("user"); ?></div></label>
								<input id="user" name="user" type="text" value="<?php echo $form->value("user"); ?>" placeholder="Username">
							</p>
						<td>
							<p>
								<label for="pass"><div id="server_side_error"><?php echo $form->error("pass"); ?></div></label>
								<input id="pass" name="pass" type="password" value="<?php echo $form->value("pass"); ?>" placeholder="Password">
							</p>
						</td>
						<!--
						<td>
							<font size="1">Remember Me</font><br/>
							<input type="checkbox" name="remember" <?php if($form->value("remember") != ""){ echo "checked"; } ?>>
						</td>
						-->
						<td>
							<p id="submit_button">
								<input type="hidden" name="sublogin" value="1">
								<input class="login_button" type="submit" value="Login">
							</p>
						</td>
						<td>|</td>
						<td>Not a Member?</td>
						<td><a href="index.php?op=register" class="register_button">Register</a></td>
					</tr>
				</table>
			</form>
<?php 	}	?>
</div>