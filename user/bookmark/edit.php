<?php require_once('../../layouts/admin/header.php') ?>


<?php
$bookmark = find("bookmark", $_GET['id']);
$books = all("buku");
?>
<?php
if (isset($_POST['submit'])) {
  unset($_POST['submit']);

  update("bookmark");
  flash("Berhasil menambah bookmark!", "success");
  header("Location: ./index.php");
}
?>
<div id="main" class="min-vh-100 pt-4">
  <div class="py-4">
    <div class="d-flex justify-content-between w-100 flex-wrap">
      <div class="mb-3 mb-lg-0">
        <h1 class="h4">Ubah Bookmark</h1>
      </div>
    </div>
  </div>
  <div class="card border-0 shadow components-section">
    <div class="card-body">
      <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $bookmark['id'] ?>">

        <div class="mb-3">
          <label for="id_buku">Buku</label>
          <select class="form-select select2" id="id_buku" name="id_buku" aria-label="Default select example">
            <?php foreach ($books as $book) : ?>
              <option value="<?= $book['id'] ?>" <?= $book['id'] == $bookmark['id_buku'] ? 'selected' : ''  ?> ><?= $book['judul'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="mb-3">
          <label for="tanggal_tambah">Tanggal Tambah</label>
          <input class="form-control" name="tanggal_tambah" id="tanggal_tambah" type="date" required value="<?= $bookmark['tanggal_tambah'] ?>">
        </div>
        <div class="mb-3">
          <label for="catatan">Catatan</label>
          <textarea name="catatan" id="catatan" cols="30" rows="10" class="form-control"><?= $bookmark['catatan'] ?></textarea>
        </div>
        <div class="d-flex align-items-center justify-content-end">
          <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>