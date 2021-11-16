<?php

include("banu_config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $jenis_kendaraan = $_POST['jenis_kendaraan'];
    $warna_kendaraan = $_POST['warna_kendaraan'];
    $plat_kendaraan = $_POST['plat_kendaraan'];
    $bahan_bakar = $_POST['bahan_bakar'];

    // buat query
    $sql = "INSERT INTO jenis_kendaraan (jenis_kendaraan, warna_kendaraan, plat_kendaraan, bahan_bakar) VALUE ('$jenis_kendaraan', '$warna_kendaraan', '$plat_kendaraan', '$bahan_bakar')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: banu.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: banu.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>