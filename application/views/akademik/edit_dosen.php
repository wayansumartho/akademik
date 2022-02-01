<?php include('config.php'); ?>


<div class="container" style="margin-top:20px">
    <center>
        <font size="6">Edit Data</font>
    </center>

    <hr>

    <?php
    //jika sudah mendapatkan parameter GET id dari URL
    if (isset($_GET['NIP'])) {
        //membuat variabel $id untuk menyimpan id dari GET id di URL
        $NIP = $_GET['NIP'];

        //query ke database SELECT tabel mahasiswa berdasarkan id = $id
        $select = mysqli_query($koneksi, "SELECT * FROM dosen WHERE NIP='$NIP'") or die(mysqli_error($koneksi));

        //jika hasil query = 0 maka muncul pesan error
        if (mysqli_num_rows($select) == 0) {
            echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
            exit();
            //jika hasil query > 0
        } else {
            //membuat variabel $data dan menyimpan data row dari query
            $data = mysqli_fetch_assoc($select);
        }
    }
    ?>

    <?php
    //jika tombol simpan di tekan/klik
    if (isset($_POST['submit'])) {
        $Nama_Dos              = $_POST['Nama_Dos'];
        $Kode_MK    = $_POST['Kode_MK'];
        $ALAMAT    = $_POST['ALAMAT'];

        $sql = mysqli_query($koneksi, "UPDATE dosen SET Nama_Dos='$Nama_Dos', Kode_MK='$Kode_MK', ALAMAT='$ALAMAT' WHERE NIP='$NIP'") or die(mysqli_error($koneksi));

        if ($sql) {
            echo '<script>alert("Berhasil menyimpan data."); document.location="tampil_dosen";</script>';
        } else {
            echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
        }
    }
    ?>

    <form action="<?php base_url("index.php/akademik/edit_tampil_dosen?page=edit_dosen&NIP=" . $data['NIP']) ?> " method="post">
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">NIP</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" name="NIP" class="form-control" size="4" value="<?php echo $data['NIP']; ?>" readonly required>
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Dosen</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" name="Nama_Dos" class="form-control" value="<?php echo $data['Nama_Dos']; ?>" required>
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Kode Matakuliah</label>
            <div class="col-md-6 col-sm-6">
                <select name="Kode_MK" class="form-control" required>
                    <option value="">Pilih Kode Matakuliah</option>
                    <option value="A001" <?php if ($data['Kode_MK'] == 'A001') {
                                                echo 'selected';
                                            } ?>>A001</option>
                    <option value="A002" <?php if ($data['Kode_MK'] == 'A002') {
                                                echo 'selected';
                                            } ?>>A002</option>
                    <option value="A003" <?php if ($data['Kode_MK'] == 'A003') {
                                                echo 'selected';
                                            } ?>>A003</option>
                    <option value="A004" <?php if ($data['Kode_MK'] == 'A004') {
                                                echo 'selected';
                                            } ?>>A004</option>
                    <option value="B005" <?php if ($data['Kode_MK'] == 'B005') {
                                                echo 'selected';
                                            } ?>>B005</option>
                    <option value="B006" <?php if ($data['Kode_MK'] == 'B006') {
                                                echo 'selected';
                                            } ?>>B006</option>
                    <option value="B007" <?php if ($data['Kode_MK'] == 'B007') {
                                                echo 'selected';
                                            } ?>>B007</option>
                    <option value="B008" <?php if ($data['Kode_MK'] == 'B008') {
                                                echo 'selected';
                                            } ?>>B008</option>
                </select>
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat Dosen</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" name="ALAMAT" class="form-control" value="<?php echo $data['ALAMAT']; ?>" required>
            </div>
        </div>
        <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
                <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                <a href="<?= base_url('index.php/akademik/tampil_dosen'); ?>" class=" btn btn-warning">Kembali</a>
            </div>
        </div>
    </form>
</div>