<?php require_once('../../layouts/admin/header.php') ?>


<?php 
  $book = find("buku", $_GET['id'])
?>
<?php
$categories = all("kategori");
?>
<?php
if (isset($_POST['submit'])) {
    unset($_POST['submit']);
    update("buku");
    flash("Berhasil mengubah buku!", "success");
    header("Location: ./index.php");
}
?>
<div id="main" class="min-vh-100 pt-4">
    <div class="py-4">
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Tambah Buku</h1>
            </div>
        </div>
    </div>
    <div class="card border-0 shadow components-section">
        <div class="card-body">
            <form action="" method="POST">
                <input name="id" id="id" type="hidden" value="<?= $book['id'] ?>">

                <div class="mb-3">
                    <label for="judul">Judul</label>
                    <input class="form-control" name="judul" id="judul" type="text" required value="<?= $book['judul'] ?>">
                </div>
                <div class="col-md-12 col-12 mb-3">
                    <label for="id_kategori">Kategori</label>
                    <select class="form-select select2" id="id_kategori" name="id_kategori" aria-label="Default select example">
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?= $category['id'] ?>" <?= $category['id'] == $book['id_kategori'] ? 'selected' : '' ?> ><?= $category['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="cover">Link Cover</label>
                    <input class="form-control" name="cover" id="cover" type="text" required value="<?= $book['cover'] ?>">
                </div>
                <div class="mb-3">
                    <label for="file">Link File</label>
                    <input class="form-control" name="file" id="file" type="text" required value="<?= $book['file'] ?>">
                </div>
                <div class="mb-3">
                    <label for="halaman">Halaman</label>
                    <input class="form-control" name="halaman" id="halaman" type="number" required value="<?= $book['halaman'] ?>">
                </div>
                <div class="mb-3">
                    <label for="tanggal_rilis">Tanggal Rilis</label>
                    <input class="form-control" name="tanggal_rilis" id="tanggal_rilis" type="date" required value="<?= $book['tanggal_rilis'] ?>">
                </div>
                <div class="mb-3">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control"><?= $book['deskripsi'] ?></textarea>
                </div>
                <div class="d-flex align-items-center justify-content-end">
                    <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>