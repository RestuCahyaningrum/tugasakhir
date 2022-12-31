<?php 
require '../koneksi.php';

$id_pengaduan=$_POST['id_pengaduan'];
$tgl_tanggapan=$_POST['tgl_tanggapan'];
$tanggapan=$_POST['tanggapan'];
$id_petugas=$_POST['id_petugas'];
$st='selesai';

$sql=mysqli_query($GLOBALS["___mysqli_ston"], "insert into tanggapan(id_pengaduan,tgl_tanggapan,tanggapan,id_petugas) values('$id_pengaduan','$tgl_tanggapan','$tanggapan','$id_petugas')");

$update_st=mysqli_query($GLOBALS["___mysqli_ston"], "update pengaduan set status='$st' where id_pengaduan='$id_pengaduan'");

if ($sql) 
{
	?>
	<script type="text/javascript">
		alert('Data sudah ditanggapi');
		window.location="petugas.php?url=verifikasit_laporan";
	</script>
<?php
}

 ?>