<?php
	include "includes/upload.php";
	$upload=new Upload();
	$upload->ProfilePicture();
?>
uplaod picture here
<form enctype="multipart/form-data" method="post" action="">
Picture: <input type="file" name="_upload" />
<input type="submit" value="Upload" />
</form>