<div class="container">
    <h1>Halaman Tambah Kursus</h1> <br>
    <form action="" method="post">

        <!-- hendler id -->
        <input type="hidden" name="id" value="<?= $kursus->id; ?>">

        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" name="title" class="form-control" placeholder="Judul Kursus" value="<?= $kursus->title; ?>">
        </div>
        <div class="form-group">
            <label for="description">Deskripsi</label>
            <input type="text" name="description" class="form-control" placeholder="Deskripsi Kursus" value="<?= $kursus->description; ?>">
        </div>
        <div class="form-group">
            <label for="duration">Durasi</label>
            <input type="text" name="duration" class="form-control" placeholder="Durasi Kursus" value="<?= $kursus->duration; ?>">
        </div> <br>
        <a href="<?= base_url('kursus') ?>" class="btn btn-sm btn-danger">Batal</a>
        <button type="submit" name="update" class="btn btn-sm btn-primary">Simpan</button>
    </form>
</div>