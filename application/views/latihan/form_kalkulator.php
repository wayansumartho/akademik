<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title>Documents</title>
</head>
<body>
	<pre>
	
		<form action="<?php echo site_url('welcome/aksi_kalkulator'); ?>" method="POST">

			Angka Pertama	: <input type="text" name="angka1">

			Angka Kedua	: <input type="text" name="angka2">

			Operasi	: <select name="operasi">
				<option value="penjumlahan">Penjumlahan</option>
				<option value="pengurangan">Pengurangan</option>
				<option value="perkalian">Perkalian</option>
				<option value="pembagian">Pembagian</option>
			</select>

			<input type="submit" name="Hitung">
		</form>
	</pre>
</body>
</html>