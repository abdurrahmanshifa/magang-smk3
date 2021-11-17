<?php

include("anto_config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $jenis_laptop = $_POST['jenis_laptop'];
    $procesor_laptop = $_POST['procesor_laptop'];
    $jenis_ram = $_POST['jenis_ram'];
    $jenis_gpu = $_POST['jenis_gpu'];

    // buat query
    $sql = "INSERT INTO jenis_laptop (jenis_laptop, procesor_laptop, jenis_ram, jenis_gpu) VALUE ('$jenis_laptop', '$procesor_laptop', '$jenis_ram', '$jenis_gpu')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: anto.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: anto.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>