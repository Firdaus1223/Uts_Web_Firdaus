<?php require_once('../../layouts/web/header.php') ?>


<?php
$books = query("SELECT
    buku.*,
    kategori.nama as nama_kategori
    FROM buku
    JOIN kategori ON buku.id_kategori=kategori.id
");

?>
<!-- Products Start -->
<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Daftar Buku</h1>
    </div>
</div>
<!-- Page Header End -->


<!-- Shop Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">


        <!-- Shop Product Start -->
        <div class="col-12">
            <div class="row pb-3">
                <?php foreach($books as $book): ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="<?= $book['cover'] ?>" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h3 class="text-truncate mb-3">Buku 1</h3>
                                <h6><?= $book['nama_kategori'] ?></h6>
                                <div class="d-flex justify-content-center">
                                    <h6><?= $book['halaman'] ?> Halaman - <?= $book['tanggal_rilis'] ?></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Lihat</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                
            </div>
        </div>
        <!-- Shop Product End -->
    </div>
</div>
<!-- Shop End -->

<?php require_once('../../layouts/web/footer.php') ?>