<div class="container">
    <h1>Halaman Tambah Materi</h1> <br>
    <form action="" method="post">

        <!-- hendler id -->
        <input type="hidden" name="id" value="<?= $material->id ?>">

        <!-- combo box id_courses -->
        <div class="form-group">
            <label for="courses_id">Judul Kursus</label>
            <select name="courses_id" id="courses_id" class="form-control">
                <option value="" disabled selected>--PILIH--</option>
                <?php foreach ($kursus as $k) : ?>
                    <option value="<?= $k->id ?>" <?php if ($k->id === $material->courses_id) echo "selected"; ?>><?= $k->title ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="title_material">Judul Materi</label>
            <input type="text" name="title_material" class="form-control" placeholder="Judul Materi" value="<?= $material->title_material ?>">
        </div>
        <div class="form-group">
            <label for="description_material">Deskripsi</label>
            <input type="text" name="description_material" class="form-control" placeholder="Deskripsi Materi" value="<?= $material->description_material ?>">
        </div>
        <div class="form-group">
            <label for="embed_link">Link Tautan</label>
            <input type="text" name="embed_link" class="form-control" placeholder="Link Tautan Materi" value="<?= $material->embed_link ?>">
        </div> <br>
        <a href="<?= base_url('material') ?>" class="btn btn-sm btn-danger">Batal</a>
        <button type="submit" name="update" class="btn btn-sm btn-primary">Simpan</button>
    </form>
</div>