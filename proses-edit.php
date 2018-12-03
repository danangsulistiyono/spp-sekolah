<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['nis'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tanggal_lahir'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $kelas = $_POST['kelas'];

    // buat query update
    $sql = "UPDATE tb_siswa SET nama='$nama', jenis_kelamin='$jk', tanggal_lahir='$tgl', alamat='$alamat', kelas='$kelas' WHERE id=$nis";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list-siswa.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>