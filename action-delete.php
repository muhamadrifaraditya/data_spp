<?php
include("../koneksi.php");
$IdSPP = $_GET['id_spp'];
$query_mysql = mysqli_query($koneksi, "DELETE FROM spp WHERE id_spp='$IdSPP' ");

if ($query_mysql) {
    echo "<script>alert('Data Spp berhasil dihapus'); window.location.href='read.php'</script>";
} else {
    echo "<script>alert('Data Spp gagal dihapus'); window.location.href='read.php'</script>";
}
