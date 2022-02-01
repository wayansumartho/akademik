<div class="container" style="margin-top:20px">
	<center>
		<font size="6">Data Mahasiswa</font>
	</center>
	<hr>
	<a href="<?php echo site_url('index.php/akademik/tambah_mhs') ?>"><button class="btn btn-dark right">Tambah Data</button></a>
	<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>NO.</th>
					<th>NIM</th>
					<th>Nama Mahasiswa</th>
					<th>Jenis Kelamin</th>
					<th>Program Studi</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach ($mahasiswa as $data) { ?>

					<tr>
						<td><?php echo $no++ ?> </td>
						<td><?php echo $data->Nim ?></td>
						<td><?php echo $data->Nama_Mhs ?></td>
						<td><?php echo $data->Jenis_Kelamin ?></td>
						<td><?php echo $data->Program_Studi ?></td>
						<td>
							<a href="<?php echo site_url(" index.php/akademik/edit_tampil?page=edit_mhs&Nim=" . $data['Nim']); ?>" class="btn btn-secondary btn-sm">Edit</a>
							<a href="<?php echo site_url(" index.php/akademik/delete_mhs?page=tampil_mhs&Nim=" . $data['Nim']); ?>" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
						</td>
					</tr>
				<?php } ?>
			<tbody>
		</table>
	</div>
</div>