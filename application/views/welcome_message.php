<!DOCTYPE html>
<html>
<head>
	<title>Upload Form</title>
</head>
<body>

	<?php echo $error;?>

	<?php echo form_open_multipart('subject/do_upload');?>

	<input type="file" name="userfile" size="20" />

	<br /><br />

	<input type="submit" value="upload" />


</body>
</html>