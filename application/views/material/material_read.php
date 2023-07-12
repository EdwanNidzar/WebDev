<div class="container">
    <table class="table table-hover" id="example">
        <thead>
            <tr>
                <th>NO</th>
                <th>Judul Kursus</th>
                <th>Judul Materi</th>
                <th>Deskripsi</th>
                <th>Link Tautan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <h1>Halaman Materi</h1> <br>
            <a href="<?= base_url('material/tambah') ?>" class="btn btn-sm btn-primary"> Tambah Data</a><br><br>

            <?php $no = 1;
            foreach ($material as $m) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $m->title ?></td>
                    <td><?= $m->title_material ?></td>
                    <td><?= $m->description_material ?></td>
                    <td> <a href="<?= $m->embed_link ?>" class="btn btn-sm btn-light">Buka Materi</></td>
                    <td>
                        <a href="<?= base_url('material/ubah/') ?><?= $m->id ?>" class="btn btn-info btn-sm">Ubah</a>
                        <a href="<?= base_url('material/hapus/') ?><?= $m->id ?>" onclick="return confirm('Yakin ingin menghapus Data ini')" class="btn btn-danger btn-sm"></i>Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>