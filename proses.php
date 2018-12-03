<?php
	include 'koneksi.php';
	$nis = $_POST['nis'];
	$nama  = $_POST['nama'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$kelas = $_POST['kelas'];

	$daftar = mysqli_query($koneksi, "INSERT INTO tb_siswa(nis, nama, tanggal_lahir, jenis_kelamin, alamat, kelas) VALUES ('$nis','$nama','$tgl_lahir','$jenis_kelamin','$alamat','$kelas')");

	if($daftar){
		header("location:data_siswa.php");
	}else {
		echo 'gagal'.mysqli_error($koneksi);
	}
?>