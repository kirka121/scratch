<?php
if (isset($_GET['user']) && $_GET['user'] != ""){
	/* Requested Username error checking */
	$req_user = trim($_GET['user']);
	if(!$req_user || strlen($req_user) == 0 ||
	   !preg_match("/^([0-9a-z])+$/i", $req_user) ||
	   !$database->usernameTaken($req_user)){
	   die("Username not registered");
	}

	/* Logged in user viewing own account */
	if(strcmp($session->username,$req_user) == 0){
	   echo "<h1>My Account</h1>";
	}
	/* Visitor not viewing own account */
	else{
	   echo "<h1>User Info</h1>";
	}

	/* Display requested user information */
	$req_user_info = $database->getUserInfo($req_user);

	/* Username */
	echo "<b>Username: ".$req_user_info['username']."</b><br>";

	/* Email */
	echo "<b>Email:</b> ".$req_user_info['email']."<br>";

} else {
	echo "wrong page request, try again";
}
?>



