<?php include('config.php'); ?>

<center>
    <font size="6">Tambah Data</font>
</center>
<hr>

<form action="<?= base_url('index.php/akademik/aksi_simpan_Dosen'); ?>" method="post">
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">NIP</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" name="NIP" class="form-control" size="4" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Dosen</label>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="Nama_Dos" class="form-control" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Kode Matakuliah</label>
        <div class="col-md-6 col-sm-6">
            <select name="Kode_MK" class="form-control" required>
                <option value="">Pilih Kode Matakuliah</option>
                <option value="A001">A001</option>
                <option value="A002">A002</option>
                <option value="A003">A003</option>
                <option value="A004">A004</option>
                <option value="B005">B005</option>
                <option value="B006">B006</option>
                <option value="B007">B007</option>
                <option value="B008">B008</option>
            </select>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">ALAMAT</label>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="ALAMAT" class="form-control" required>
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