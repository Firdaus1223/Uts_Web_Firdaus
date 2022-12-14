<?php require_once('../../layouts/admin/header.php') ?>
<?php
$books = query("SELECT
    buku.*,
    kategori.nama as nama_kategori
    FROM buku
    JOIN kategori ON buku.id_kategori=kategori.id
");
?>

<div id="main" class="min-vh-100 pt-4">
    <div class="py-4">
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Daftar Kategori</h1>
            </div>
            <a href="./create.php" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>
    <div class="card border-0 shadow components-section">
        <div class="card-body">
            <table class="datatable table w-full">
                <thead>
                    <tr>
                        <th></th>
                        <th>Cover</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Deskripsi</th>
                        <th>Halaman</th>
                        <th>Tanggal Rilis</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($books as $book) : ?>
                        <tr>
                            <th><?= $i ?></th>
                            <td>
                                <img src="<?= $book['cover'] ?>" alt="" class="img-fluid img-thumbnail" style="height: 100px;" >
                            </td>
                            <td><?= $book['judul'] ?></td>
                            <td><?= $book['nama_kategori'] ?></td>
                            <td><?= $book['deskripsi'] ?></td>
                            <td><?= $book['halaman'] ?></td>
                            <td><?= $book['tanggal_rilis'] ?></td>

                            <td>
                                <a href="./delete.php?id=<?= $book['id'] ?>" class="btn btn-sm btn-danger">Hapus</a>
                                <a href="./edit.php?id=<?= $book['id'] ?>" class="btn btn-sm btn-warning">Ubah</a>
                            </td>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>