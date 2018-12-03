<?php

include("koneksi.php");

if( isset($_GET['nis']) ){

    // ambil id dari query string
    $id = $_GET['nis'];

    // buat query hapus
    $sql = "DELETE FROM tb_siswa WHERE id=$nis";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: data_siswa.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>