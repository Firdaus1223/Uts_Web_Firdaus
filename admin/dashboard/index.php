<?php require_once('../../layouts/admin/header.php') ?>
<?php 
    $users = query("SELECT * FROM pengguna WHERE role = 2");

?>

<div id="main" class="min-vh-100 pt-4">
    <div class="row">
        <div class="col-12 mb-4">
            <h2 class="h4">Selamat Datang, <?= $_SESSION['nama'] ?></h2>
        </div>
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="fs-5 fw-bold mb-0">Daftar Pengguna</h2>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush datatable">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-bottom" scope="col">#</th>
                                    <th class="border-bottom" scope="col">Nama</th>
                                    <th class="border-bottom" scope="col">Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($users as $user): ?>
                                    <?php $i = 1 ?>
                                    <tr>
                                        <th><?= $i ?></th>
                                        <th class="text-gray-900" scope="row"><?= $user['nama'] ?></th>
                                        <td class="fw-bolder text-gray-500"><?= $user['username'] ?></td>
                                    </tr>
                                    <?php $i++ ?>
                                <?php endforeach; ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>