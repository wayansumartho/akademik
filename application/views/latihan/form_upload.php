<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title>Documents</title>
</head>
<body>
<?php
if (isset($error)) {
 	 echo $error;
 }?>
<form action="<?php echo site_url('welcome/aksi_upload'); ?>" method= "POST" enctype="multipart/form-data">
<input type="file" name="berkas" />
<br /> <br />
<input type="submit" name="upload" />
</form>
</body>
</html>