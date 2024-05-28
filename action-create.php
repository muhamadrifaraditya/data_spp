<?php
if (isset($_POST['Submit'])) {
    $IdSPP = $_POST['IdSPP'];
    $tahun = $_POST['tahun'];
    $nominal = $_POST['nominal'];
    $keterangan = $_POST['keterangan'];

    include("../koneksi.php");
    $result = mysqli_query($koneksi, "INSERT INTO spp(id_spp,tahun,nominal,keterangan) VALUES('$IdSPP','$tahun','$nominal','$keterangan')");

    if ($result) {
        echo "<script>alert('Data SPP berhasil ditambahkan'); window.location.href='read.php'</script>";
    } else {
        echo "<script>alert('Data SPP gagal ditambahkan'); window.location.href='read.php'</script>";
    }
}
