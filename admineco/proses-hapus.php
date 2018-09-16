<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_GET['id'])) {

	$nik = $_GET['id'];

	// perintah query untuk menghapus data pada tabel bsv_anggota
	$query = mysql_query("DELETE FROM bsv_anggota WHERE nik='$nik'");

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil delete data
		header('location: welcome.php?alert=4');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: welcome.php?alert=1');
	}	
}						
?>