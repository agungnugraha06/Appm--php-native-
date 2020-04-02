<?php 

require '../koneksi.php';
$sql=mysqli_query($koneksi, "UPDATE pengaduan SET status='sedang diproses' WHERE id_pengaduan='$_GET[id]'");
if ($sql)
{
	header('location:petugas.php?url=verifikasi_pengaduan');
}

 ?>