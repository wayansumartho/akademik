<?php include('config.php'); ?>

<center>
	<font size="6">Tambah Data</font>
</center>
<hr>

<form action="<?= base_url('index.php/akademik/aksi_simpan'); ?>" method="post">
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Nim</label>
		<div class="col-md-6 col-sm-6 ">
			<input type="text" name="Nim" class="form-control" size="4" required>
		</div>
	</div>
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Mahasiswa</label>
		<div class="col-md-6 col-sm-6">
			<input type="text" name="Nama_Mhs" class="form-control" required>
		</div>
	</div>
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
		<div class="col-md-6 col-sm-6 ">
			<div class="btn-group" data-toggle="buttons">
				<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
					<input type="radio" class="join-btn" name="Jenis_Kelamin" value="Laki-Laki" required>Laki-Laki
				</label>
				<label class="btn btn-primary " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
					<input type="radio" class="join-btn" name="Jenis_Kelamin" value="Perempuan" required>Perempuan
				</label>
			</div>
		</div>
	</div>
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Program Studi</label>
		<div class="col-md-6 col-sm-6">
			<select name="Program_Studi" class="form-control" required>
				<option value="">Pilih Program Studi</option>
				<option value="Teknik Informatika">Teknik Informatika</option>
				<option value="Sistem Informasi">Sistem Informasi</option>
				<option value="Teknik Komputer">Teknik Komputer</option>
				<option value="Teknologi Informasi">Teknologi Informasi</option>
				<option value="Akuntansi">Akuntansi</option>
				<option value="Kewirausahaan">Kewirausahaan</option>
				<option value="Ekonomi">Ekonomi</option>
				<option value="Ilmu Pemerintahan">Ilmu Pemerintahan</option>
				<option value="Hubungan Internasional">Hubungan Internasional</option>
			</select>
		</div>
	</div>
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align"></label>
		<div class="col-md-6 col-sm-6 ">
			<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
		</div>
	</div>

</form>
</div>