<?php
error_reporting(E_ALL);

mysql_connect("localhost","website","9doggy9");
mysql_select_db("giggo");

if ( isset( $_GET['id'] ) ) {
	$id = (int)$_GET['id'];
	if ( $id > 0 ) {
		$res = mysql_query("SELECT `content` FROM `images` WHERE `id`=".$id);
		if ( mysql_num_rows( $res ) == 1 ) {
			$image = mysql_fetch_array($res);
			header("Content-type: image");
			echo $image['content'];
		}
	}
}
?>