<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <ul class="nav side-menu">
            <li><a href="<?= base_url('index.php/akademik'); ?>"><i class="fa fa-home"></i> Home <span class="fa fa-chevron"></span></a>
            </li>
            <li><a href="#"><i class="fa fa-desktop"></i> Data Mahasiswa <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?= base_url('index.php/akademik/tampil_mhs'); ?>">Tampil Data</a></li>
                    <li><a href="<?= base_url('index.php/akademik/tambah_mhs'); ?>">Tambah Data</a></li>
                    <li><a href="<?= base_url('index.php/akademik/upload_file'); ?>">Upload Berkas</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-desktop"></i> Data Dosen <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?= base_url('index.php/akademik/tampil_dosen'); ?>">Tampil Data</a></li>
                    <li><a href="<?= base_url('index.php/akademik/tambah_dosen'); ?>">Tambah Data</a></li>
                    <li><a href="<?= base_url('index.php/akademik/upload_file'); ?>">Upload Berkas</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /sidebar menu -->

<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="" href="#">
        <span class="glyphicon glyphicon" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="" href="#">
        <span class="glyphicon glyphicon" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="" href="#">
        <span class="glyphicon glyphicon" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= base_url('index.php/auth/logout'); ?>">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>
<!-- /menu footer buttons -->
</div>
</div>