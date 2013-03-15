<link rel="stylesheet" href="assets/css/registration.css">
<script>
  $(document).ready(function(){
    $("#signupForm").validate({
      rules: {
        firstname: "required",
        lastname: "required",
        username: {
          required: true,
          minlength: 5
        },
        password: {
          required: true,
          minlength: 5
        },
        confirm_password: {
          required: true,
          minlength: 5,
          equalTo: "#password"
        },
        email: {
          required: true,
          email: true
        },
        topic: {
          required: "#newsletter:checked",
          minlength: 2
        },
        agree: "required"
      },
      messages: {
        firstname: "Please enter your firstname",
        lastname: "Please enter your lastname",
        username: {
          required: "Please enter a username",
          minlength: "Your username must consist of at least 5 characters"
        },
        password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        confirm_password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long",
          equalTo: "Please enter the same password as above"
        },
        email: "Please enter a valid email address",
        agree: "Please accept our policy"
      }
    });
    // propose username by combining first- and lastname
    $("#username").focus(function() {
      var firstname = $("#firstname").val();
      var lastname = $("#lastname").val();
      if(firstname && lastname && !this.value) {
        this.value = firstname + "." + lastname;
      }
    });

  });
</script>
<?php
//The user is already logged in, not allowed to register.
if($session->logged_in){
   echo "<h1>Registered</h1>";
   echo "<p>We're sorry <b>$session->username</b>, but you've already registered. ";
}
//The user has submitted the registration form and theresults have been processed.
else if(isset($_SESSION['regsuccess'])){
   // Registration was successful
   if($_SESSION['regsuccess']){
      echo "<h1>Registered!</h1>";
      echo "<p>Thank you <b>".$_SESSION['reguname']."</b>, your information has been added to the database.";
   }
   // Registration failed
   else{
      echo "<h1>Registration Failed</h1>";
      echo "<p>We're sorry, but an error has occurred and your registration for the username <b>".$_SESSION['reguname']."</b>, "
          ."could not be completed.<br>Please try again at a later time.</p>";
   }
   unset($_SESSION['regsuccess']);
   unset($_SESSION['reguname']);
}
/*
  The user has not filled out the registration form yet.
  Below is the page with the sign-up form, the names
  of the input fields are important and should not
  be changed.
 */
else{
?>
<form class="cmxform" id="signupForm" action="includes/user/process.php" method="POST">
  <fieldset>
    <legend>Register</legend>
    <?php if($form->error("firstname")){ ?>
      <p>
        <label><font size="2" color="#ff0000">Error</font></label>
        <?php echo $form->error("firstname"); ?>
      </p>
    <?php } ?>
    <p>
      <label for="firstname">First name</label>
      <input id="firstname" name="firstname" type="text" />
    </p>
    <?php if($form->error("lastname")){ ?>
      <p>
        <label><font size="2" color="#ff0000">Error</font></label>
        <?php echo $form->error("lastname"); ?>
      </p>
    <?php } ?>
    <p>
      <label for="lastname">Last name</label>
      <input id="lastname" name="lastname" type="text" />
    </p>
    <?php if($form->error("user")){ ?>
      <p>
        <label><font size="2" color="#ff0000">Error</font></label>
        <?php echo $form->error("user"); ?>
      </p>
    <?php } ?>
    <p>
      <label for="username">User name</label>
      <input id="username" name="username" type="text" />
    </p>
    <?php if($form->error("pass")){ ?>
      <p>
        <label><font size="2" color="#ff0000">Error</font></label>
        <?php echo $form->error("pass"); ?>
      </p>
    <?php } ?>
    <p>
      <label for="password">Password</label>
      <input id="password" name="password" type="password" />
    </p>
    <p>
      <label for="confirm_password">Confirm password</label>
      <input id="confirm_password" name="confirm_password" type="password" />
    </p>
    <?php if($form->error("email")){ ?>
      <p>
        <label><font size="2" color="#ff0000">Error</font></label>
        <?php echo $form->error("email"); ?>
      </p>
    <?php } ?>
    <p>
      <label for="email">Email</label>
      <input id="email" name="email" type="email" />
    </p>
    <p>
      <label for="agree">Please agree to <a href="#" class="inner_link">our policy</a></label>
      <input type="checkbox" class="checkbox" id="agree" name="agree" />
    </p>
    <p id="submit_button">
      <input type="hidden" name="subjoin" value="1">
      <input class="register_button" type="submit" value="Register">
    </p>
  </fieldset>
</form>
<?php
}
?>
