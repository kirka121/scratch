<?php 
/**
 * Mailer.php
 *
 * The Mailer class extends Mail class (php_libmail v 1.6.0)
 * 2013
 */
include("libmail.php");

class Mailer extends Mail
{
   /**
	* sendWelcome - Sends a welcome message to the newly
	* registered user, also supplying the username and
	* password.
	*/
	function sendWelcome($user, $email, $pass){
		$subject = "GEO WEB STATION - Welcome!";
		$body = $user.",\n\n"
			."Welcome! You've just registered at GEO WEB STATION "
			."with the following information:\n\n"
			."Username: ".$user."\n"
			."Password: ".$pass."\n\n"
			."If you ever lose or forget your password, a new "
			."password will be generated for you and sent to this "
			."email address, if you would like to change your "
			."email address you can do so by going to the "
			."My Account page after signing in.\n\n"
			."";

		$this->Mail('utf-8');
		$this->From( "".EMAIL_FROM_NAME.";".EMAIL_FROM_ADDR."" );
		$this->To( $email );
		$this->Subject( $subject );
		$this->Body( $body );
		$this->Priority(4) ;
		$this->smtp_on(SMTP_SERVER, SMTP_USER, SMTP_PASS, SMTP_PORT, 10);
		$this->Send();
		return 1;
	}
	
	/**
	* sendNewPass - Sends the newly generated password
	* to the user's email address that was specified at
	* sign-up.
	*/
	function sendNewPass($user, $email, $pass){
		$subject = "GEO WEB STATION - Your new password";
		$body = $user.",\n\n"
			."We've generated a new password for you at your "
			."request, you can use this new password with your "
			."username to log in to GEO WEB STATION.\n\n"
 			."Username: ".$user."\n"
			."New Password: ".$pass."\n\n"
			."It is recommended that you change your password "
			."to something that is easier to remember, which "
			."can be done by going to the My Account page "
			."after signing in.\n\n"
			."";
		$this->Mail('utf-8');
		$this->From( "".EMAIL_FROM_NAME.";".EMAIL_FROM_ADDR."" );
		$this->To( $email );
		$this->Subject( $subject );
		$this->Body( $body );
		$this->Priority(4) ;
		$this->smtp_on(SMTP_SERVER, SMTP_USER, SMTP_PASS, SMTP_PORT, 10);
		$this->Send();
		return 1;
	}
};

/* Initialize mailer object */
$mailer = new Mailer;
 
?>
