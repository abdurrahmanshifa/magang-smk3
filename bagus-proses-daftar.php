<?php

include("bagus-config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nomor_meja = $_POST['nomor_meja'];
    $daftar_minuman = $_POST['daftar_minuman'];
    $daftar_makanan = $_POST['daftar_makanan'];
    $porsi = $_POST['porsi'];
    $opsi = $_POST['opsi'];

    // buat query
    $sql = "INSERT INTO jenis_menu (nomor_meja, daftar_minuman, daftar_makanan, porsi, opsi) VALUE ('$nomor_meja', '$daftar_minuman', '$daftar_makanan', '$porsi', '$opsi')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: bagus.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: bagus.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>