<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form Tambah</title>
</head>
<body>
	<h3>Form Tambah Produk</h3>
	<hr>
		<pre>
			<form action="<?php echo site_url('crud_produk/aksi_simpan'); ?>" method="POST">

				Nama Produk 	: <input type="text"name="namaProduk">

				Harga 		: <input type="text" name="harga">

				Jumlah 		: <input type="text" name="jumlah">

				<input type="submit" name="Simpan">
				
			</form>
		</pre>

</body>
</html>