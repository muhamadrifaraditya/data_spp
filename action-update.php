<?php
if(isset($_POST['Submit'])){
    $IdSPP = $_POST['IdSPP'];
    $tahun = $_POST['tahun'];
    $nominal = $_POST['nominal'];
    $keterangan = $_POST['keterangan'];

    include("../koneksi.php");
    $result = mysqli_query($koneksi, "UPDATE spp SET tahun='$tahun',nominal='$nominal',keterangan='$keterangan' WHERE id_spp='$IdSPP' ");

    if($result){
        echo "<script>alert('Data SPP berhasil diupdate'); window.location.href='read.php'</script>";
    }else{
        echo "<script>alert('Data SPP gagal diupdate'); window.location.href='read.php'</script>";
    }
}
?>