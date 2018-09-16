<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	$nik           = mysql_real_escape_string(trim($_POST['nik']));
	$nama          = mysql_real_escape_string(trim($_POST['nama']));
	$tempat_lahir  = mysql_real_escape_string(trim($_POST['tempat_lahir']));

	$tanggal       = $_POST['tanggal_lahir'];
	$tgl           = explode('-',$tanggal);
	$tanggal_lahir = $tgl[2]."-".$tgl[1]."-".$tgl[0];

	$jenis_kelamin = $_POST['jenis_kelamin'];
	$bidang         = $_POST['bidang'];
	$alamat        = mysql_real_escape_string(trim($_POST['alamat']));
	$no_telepon    = $_POST['no_telepon'];
	$profil        = mysql_real_escape_string(trim($_POST['profil']));
	$acara_khusus  = mysql_real_escape_string(trim($_POST['event']));

	// perintah query untuk menyimpan data ke tabel bsv_anggota
	$query = mysql_query("INSERT INTO bsv_anggota(	nik,
											 	nama,
												tempat_lahir,
												tanggal_lahir,
												jenis_kelamin,
												bidang,
												alamat,
												no_telepon,
												profil,
												event)	
										VALUES(	'$nik',
												'$nama',
												'$tempat_lahir',
												'$tanggal_lahir',
												'$jenis_kelamin',
												'$bidang',
												'$alamat',
												'$no_telepon',
												'$profil',
												'$acara_khusus')");		

	mkdir("image/[$nik]");
	mkdir("image/[$nik]/[$nama]");
	
	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil insert data
		header('location: welcome.php?alert=2');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: welcome.php?alert=1');
	}						
}
?>