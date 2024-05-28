<?php
session_start();
if ($_SESSION['level'] == "") {
    header("location:auth-login-petugas.php?pesan=gagal");
}
?>

<?php require('../template/header.php'); ?>

<?php require('../template/navbar.php'); ?>

<?php require('../template/sidebar.php'); ?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>DATA SPP</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="./create.php" class="btn btn-success">Tambah Data SPP</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tr>
                                        <th>#</th>
                                        <th>ID</th>
                                        <th>Tahun</th>
                                        <th>Nominal</th>
                                        <th>Keterangan</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php
                                    include "../koneksi.php";
                                    $query_mysql = mysqli_query($koneksi, "SELECT * FROM spp ");
                                    $nomor = 1;
                                    while ($data = mysqli_fetch_array($query_mysql)) { ?>
                                        <tr>
                                            <td><?php echo $nomor++; ?></td>
                                            <td><?php echo $data['id_spp']; ?></td>
                                            <td><?php echo $data['tahun']; ?></td>
                                            <td><?php echo $data['nominal']; ?></td>
                                            <td><?php echo $data['keterangan']; ?></td>
                                            <td style="width: 20%;">
                                                <a href="update.php?id_spp=<?php echo $data['id_spp']; ?>" class="btn btn-warning my-1">Update</a>
                                                <a href="action-delete.php?id_spp=<?php echo $data['id_spp']; ?>" class="btn btn-danger my-1">Delete</a>
                                                <a href="#" class="btn btn-secondary my-1">Detail</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                <ul class="pagination mb-0">
                                    <li class="page-item disabled">
                                        <a href="#" class="page-link" tabindex></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php require('../template/footer.php'); ?>