<?php 

require 'koneksi.php';

//proses 
if (isset($_POST["simpan"])){

$nik=$_POST['nik'];
$nama=$_POST['nama'];
$user=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telp'];

$simpan=mysqli_query($koneksi, "INSERT INTO masyarakat VALUES('$nik','$nama','$user','$pass','$telp')");

if ($simpan) 
			{    
				 echo "<script>alert('Berhasil Disimpan!'); window.location='index.php'</script>";
              } else {
                  echo '<script language="javascript">alert("Gagal Disimpan") window.history.back();</script>';
              }
           }
  
  ?>

