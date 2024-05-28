<?php
    session_start();
    if($_SESSION['level']==""){
        header("location:auth-login-petugas.php?pesan=gagal");
    }
?>

<?php require('../template/header.php'); ?>

<?php require('../template/navbar.php'); ?>

<?php require('../template/sidebar.php'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update Data SPP</h1>
        </div>
        <div class="section-body">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <p class="h3">Update Data SPP</p>
                        </div>
                        <?php
                        include "../koneksi.php";
                        $IdSPP = $_GET['id_spp'];
                        $query_mysql = mysqli_query($koneksi, "SELECT * FROM spp WHERE id_spp = $IdSPP");
                        $data = mysqli_fetch_array($query_mysql); { ?>
                        <form method="POST" action="action-update.php" class="needs-validation" novalidate="">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="IdSPP" class="form-label">ID SPP</label>
                                    <input id="IdSPP" type="text" class="form-control" name="IdSPP" value="<?php echo $data['id_spp']; ?>" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="tahun" class="form-label">Tahun</label>
                                    <input type="text" class="form-control" id="tahun" name="tahun" value="<?php echo $data['tahun']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="nominal" class="form-label">Nominal</label>
                                    <input type="number" class="form-control" id="nominal" name="nominal" value="<?php echo $data['nominal']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="keterangan" class="form-label">Keterangan</label>
                                    <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $data['keterangan']; }?>">
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="Submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>