<?php require_once('../../layouts/web/header.php') ?>

<?php 
    $books = query("SELECT * FROM buku ORDER BY id DESC LIMIT 4");
?>
<!-- Products Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Terbaru</span></h2>
    </div>
    <div class="row px-xl-5 pb-3">
        <?php foreach($books as $book): ?>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="<?= $book['cover'] ?>" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3"><?= $book['judul'] ?></h6>
                    <div class="d-flex justify-content-center">
                        <h6><?= $book['halaman'] ?> Halaman - <?= $book['tanggal_rilis'] ?></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Baca</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php require_once('../../layouts/web/footer.php') ?>