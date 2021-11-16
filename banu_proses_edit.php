<?php

include("banu_config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $jenis_kendaraan = $_POST['jenis_kendaraan'];
    $warna_kendaraan = $_POST['warna_kendaraan'];
    $plat_kendaraan = $_POST['plat_kendaraan'];
    $bahan_bakar = $_POST['bahan_bakar'];

    // buat query update
    $sql = "UPDATE jenis_kendaraan SET jenis_kendaraan='$jenis_kendaraan', warna_kendaraan='$warna_kendaraan', plat_kendaraan='$plat_kendaraan', bahan_bakar='$bahan_bakar' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: banu.php?');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>