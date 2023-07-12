<?php
if ($this->session->flashdata('pesan') != '') {
    if ($this->session->flashdata('status') == true) { ?>
        <div id="success-alert" class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h5><i class="icon fas fa—check"></i> Berhasil</h5>
            <?= $this->session->flashdata('pesan'); //menampilkan isi dari flash data pesan 
            ?>
        </div>
    <?php
    } else { ?>
        <div id="error-alert" class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h5><i class="icon fas fa-ban"></i> Gagal</h5>
            <?= $this->session->flashdata('pesan'); ?>
        </div>
<?php
    }
}
