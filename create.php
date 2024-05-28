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
            <h1>Tambah Data SPP</h1>
        </div>
        <div class="section-body">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <p class="h3">Tambah Data SPP</p>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="action-create.php" class="needs-validation" novalidate="">
                            <div class="form-group">
                                <label for="IdSPP">ID SPP</label>
                                <input id="IdSPP" type="text" class="form-control" name="IdSPP" tabindex="1" required autofocus>
                            </div>
                            <div class="form-group">
                                <div class="d-block">
                                    <label for="tahun" class="control-label">Tahun</label>
                                    <input id="tahun" type="text" class="form-control" name="tahun" tabindex="2" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nominal" class="form-label">Nominal</label>
                                <input id="nominal" type="number" class="form-control" name="nominal" required>
                            </div>
                            <div class="form-group">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <input id="keterangan" type="textarea" class="form-control" name="keterangan" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="Submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>