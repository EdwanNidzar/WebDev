<div class="container">
    <h1>Halaman Tambah Kursus</h1> <br>
    <form action="" method="post">

        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" name="title" class="form-control" placeholder="Judul Kursus">
        </div>
        <div class="form-group">
            <label for="description">Deskripsi</label>
            <input type="text" name="description" class="form-control" placeholder="Deskripsi Kursus">
        </div>
        <div class="form-group">
            <label for="duration">Durasi</label>
            <input type="text" name="duration" class="form-control" placeholder="Durasi Kursus">
        </div> <br>
        <a href="<?= base_url('kursus') ?>" class="btn btn-sm btn-danger">Batal</a>
        <button type="submit" name="insert" class="btn btn-sm btn-primary">Simpan</button>
    </form>
</div>