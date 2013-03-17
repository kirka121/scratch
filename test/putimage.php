<?php
error_reporting(E_ALL);

mysql_connect("localhost","website","9doggy9");
mysql_select_db("giggo");

if( !empty( $_FILES['image']['name'] ) ) {
	if ( $_FILES['image']['error'] == 0 ) {
		if( substr($_FILES['image']['type'], 0, 5)=='image' ) {
			$image = file_get_contents( $_FILES['image']['tmp_name'] );
			$image = mysql_escape_string( $image );
			mysql_query("INSERT INTO `images` VALUES(NULL, '".$image."')");
		}
	}
}
?>
<form enctype="multipart/form-data" method="post" action="">
Изображение: <input type="file" name="image" />
<input type="submit" value="Загрузить" />
</form>