<?php
	include "includes/upload.php";
	$upload=new Upload();
	$upload->ProfilePicture();
?>
uplaod picture here
<div id="error">
<?php if(isset($upload->error)){
	echo $upload->error;
} ?>
</div>
<form enctype="multipart/form-data" method="post" action="">
Picture: <input type="file" name="_upload" />
<input type="submit" value="Upload" />
</form>