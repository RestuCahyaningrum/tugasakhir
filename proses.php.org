<?php 
require '../koneksi.php';
$sql=mysqli_query($GLOBALS["___mysqli_ston"], "update pengaduan set status='proses' where id_pengaduan='$_GET[id]' ");
if ($sql) {
	header('location:petugas.php?url=verifikasit_laporan');
}

 ?>