<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
</head>
<body>
	<h3>Form Edit Produk</h3>
	<hr>
		<pre>
			<form action="<?php echo site_url('crud_produk/aksi_edit'); ?>" method="POST">
				<input type="hidden" name="idProduk" value="<?php echo $produk['idProduk'];?>">


				Nama Produk 	: <input type="text" name="namaProduk" value="<?php echo $produk['namaProduk'];?>">

				Harga 		: <input type="text" name="harga" value="<?php echo $produk['harga'];?>">

				Jumlah 		: <input type="text" name="jumlah" value="<?php echo $produk['jumlah'];?>">

				<input type="submit" name="Simpan">
				
			</form>
		</pre>

</body>
</html>