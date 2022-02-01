<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title>Sukses Upload</title>
</head>

<body>
	<?php
	if (isset($error)) {
		echo $error;
	} ?>

	<form action="<?php echo site_url('akademik/aksi_upload'); ?>" method="POST" enctype="multipart/form-data">

		<input type="file" name="berkas" />
		<br /><br />
		<div class="item form-group">

			<div class="col-md-6 col-sm-6 ">
				<input type="submit" name="upload" class="btn btn-primary" value="Simpan">
			</div>
		</div>
	</form>
</body>

</html>