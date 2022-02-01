<?php
//memasukkan file config.php
include('config.php');
?>


<div class="container" style="margin-top:20px">
    <center>
        <font size="6">Data Dosen</font>
    </center>
    <hr>
    <a href="<?= base_url('index.php/akademik/tambah_dosen') ?>"><button class="btn btn-dark right">Tambah Data</button></a>
    <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr>
                    <th>NO.</th>
                    <th>NIP</th>
                    <th>Nama Dosen</th>
                    <th>Kode_MK</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
                $sql = mysqli_query($koneksi, "SELECT * FROM dosen ORDER BY NIP DESC") or die(mysqli_error($koneksi));
                //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
                if (mysqli_num_rows($sql) > 0) {
                    //membuat variabel $no untuk menyimpan nomor urut
                    $no = 1;
                    //melakukan perulangan while dengan dari dari query $sql
                    while ($data = mysqli_fetch_assoc($sql)) {
                        //menampilkan data perulangan
                        echo '
						<tr>
							<td>' . $no . '</td>
							<td>' . $data['NIP'] . '</td>
							<td>' . $data['Nama_Dos'] . '</td>
							<td>' . $data['Kode_MK'] . '</td>
							<td>' . $data['ALAMAT'] . '</td>
							<td>
								<a href="' . base_url("index.php/akademik/edit_tampil_dosen?page=edit_dosen&NIP=" . $data['NIP']) .  '" class="btn btn-secondary btn-sm">Edit</a>
								<a href="' . base_url("index.php/akademik/delete_dosen?page=tampil_dosen&NIP=" . $data['NIP']) .  '" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
							</td>
						</tr>
						';
                        $no++;
                    }
                    //jika query menghasilkan nilai 0
                } else {
                    echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
                }
                ?>
            <tbody>
        </table>
    </div>
</div>