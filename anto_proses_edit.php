<?php

include("anto_config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $jenis_laptop = $_POST['jenis_laptop'];
    $procesor_laptop = $_POST['procesor_laptop'];
    $jenis_ram = $_POST['jenis_ram'];
    $jenis_gpu = $_POST['jenis_gpu'];

    // buat query update
    $sql = "UPDATE jenis_laptop SET jenis_laptop='$jenis_laptop', procesor_laptop='$procesor_laptop', jenis_ram='$jenis_ram', jenis_gpu='$jenis_gpu' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: anto.php?');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>