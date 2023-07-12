<div class="container">
    <?php
    $this->load->view('/temp/notif')
    ?>
    <table class="table table-hover" id="example">
        <thead>
            <tr>
                <th>NO</th>
                <th>Judul Kursus</th>
                <th>Deskripsi</th>
                <th>Waktu</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <h1>Halaman Kursus</h1>
            <a href="<?= base_url('kursus/tambah') ?>" class="btn btn-sm btn-primary"> Tambah Data</a><br><br>

            <?php $no = 1;
            foreach ($kursus as $k) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $k->title ?></td>
                    <td><?= $k->description ?></td>
                    <td><?= $k->duration ?></td>
                    <td>
                        <a href="<?= base_url('kursus/ubah/') ?><?= $k->id ?>" class="btn btn-info btn-sm">Ubah</a>
                        <a href="<?= base_url('kursus/hapus/') ?><?= $k->id ?>" onclick="return confirm('Yakin ingin menghapus Data ini')" class="btn btn-danger btn-sm"></i>Hapus</a>
                        <a href="<?= base_url('kursus/liat/') ?><?= $k->id ?>" class="btn btn-light btn-sm">Liat</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>