<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	if (isset($_POST['nik'])) {
		$nik           = mysql_real_escape_string(trim($_POST['nik']));
		$nama          = mysql_real_escape_string(trim($_POST['nama']));
		$tempat_lahir  = mysql_real_escape_string(trim($_POST['tempat_lahir']));
		
		$tanggal       = $_POST['tanggal_lahir'];
		$tgl           = explode('-',$tanggal);
		$tanggal_lahir = $tgl[2]."-".$tgl[1]."-".$tgl[0];

		$jenis_kelamin = $_POST['jenis_kelamin'];
		$bidang        = $_POST['bidang'];
		$alamat        = mysql_real_escape_string(trim($_POST['alamat']));
		$no_telepon    = $_POST['no_telepon'];
		$profil        = mysql_real_escape_string(trim($_POST['profil']));
		$acara_khusus  = mysql_real_escape_string(trim($_POST['event']));
		
		// perintah query untuk mengubah data pada tabel bsv_anggota
		$query = mysql_query("UPDATE bsv_anggota SET nama 		= '$nama',
												  tempat_lahir 	= '$tempat_lahir',
												  tanggal_lahir = '$tanggal_lahir',
												  jenis_kelamin = '$jenis_kelamin',
												  bidang 		= '$bidang',
												  alamat 		= '$alamat',
												  no_telepon 	= '$no_telepon',
												  profil        = '$profil',
												  event 		= '$acara_khusus'
										    WHERE nik 			= '$nik'");
											
		// cek query
		if ($query) {
			// jika berhasil tampilkan pesan berhasil update data
			header('location: welcome.php?alert=3');
		} else {
			// jika gagal tampilkan pesan kesalahan
			header('location: welcome.php?alert=1');
		}				
	}
}	
		rename("image/[$nik]/[]","image/[$nik]/[$nama]");	
?>