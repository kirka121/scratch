<?php
	//Show picture from database.
	//v2
	include("../includes/database.php");

	if ( isset( $_GET['u'] ) ) {
		$id = $_GET['u'];
		$res = mysql_query("SELECT `profile_picture` FROM `giggo_users` WHERE `username`='".$id."';");
		if ( mysql_num_rows( $res ) == 1 ) {
			$image = mysql_fetch_array($res);
		}
	}
	if(!$image['profile_picture']){
		$image['profile_picture'] = file_get_contents( "../assets/user_pofile_pictures/no_photo.png" );
	}
	header("Content-type: image");
	echo $image['profile_picture'];
?>
