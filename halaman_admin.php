<?php 
if (isset($_GET['url']))
{
	$url=$_GET['url'];
	switch ($url) {
		
		case 'verifikasit_laporan';
		include 'verifikasit_laporan.php';
		break;

    case 'detil';
    include 'detil.php';
    break;

    case 'tanggapan';
    include 'tanggapan.php';
    break;

    case 'lihat_petugas';
    include 'lihat_petugas.php';
    break;

    case 'tambah_petugas';
    include 'tambah_petugas.php';
    break;

    case 'edit_petugas';
    include 'edit_petugas.php';
    break;

    case 'lihat_masyarakat';
    include 'lihat_masyarakat.php';
    break;

     case 'previw_petugas';
    include 'previw_petugas.php';
    break;

     case 'previw_masyarakat';
    include 'previw_masyarakat.php';
    break;

     case 'tambah_masyarakat';
    include 'tambah_masyarakat.php';
    break;
	}
}
else{
?>

Selamat datang di Aplikasi Pengaduan Masyarakat <br>
Anda Login sebagai : <h2><b><?php echo $_SESSION['nama']; 

require '../koneksi.php';
$sql=mysqli_query($GLOBALS["___mysqli_ston"], "select * from pengaduan where status='0' ");
if ($cek=mysqli_num_rows($sql)){


?>
<br><br>

    <div class="row">
			<div class="col-xl-4 col-md-2 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pengaduan : </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">ada <?php echo $cek; ?> laporan dari masyarakat</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                      <span class="badge badge-danger badge-counter"><?php echo $cek; ?> </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

<?php
}}
?>

<?php
require '../koneksi.php';
$sql=mysqli_query($GLOBALS["___mysqli_ston"], "select * from pengaduan where status='proses' ");
if ($cek=mysqli_num_rows($sql)){


?>
<br><br>
      <div class="col-xl-4 col-md-2 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pengaduan : </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">ada <?php echo $cek; ?> laporan sudah di proses</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                      <span class="badge badge-danger badge-counter"><?php echo $cek; ?> </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<?php
}
?>

<?php
require '../koneksi.php';
$sql=mysqli_query($GLOBALS["___mysqli_ston"], "select * from pengaduan where status='selesai' ");
if ($cek=mysqli_num_rows($sql)){


?>
<br><br>
      <div class="col-xl-4 col-md-2 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pengaduan : </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">ada <?php echo $cek; ?> laporan sudah di tanggapi</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                      <span class="badge badge-danger badge-counter"><?php echo $cek; ?> </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
</div>
<?php
}
?>


