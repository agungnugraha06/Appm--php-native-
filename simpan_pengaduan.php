<?php 

require 'koneksi.php';

//proses 
if (isset($_POST["Simpan"])){

$tgl=date('Y/m/d');
$nik=$_POST['nik'];
$isi=$_POST['isi_laporan'];
$foto=$_FILES['foto']['name'];
$file=$_FILES['foto']['tmp_name'];
$status='belum diproses';

$sql=mysqli_query($koneksi, "INSERT INTO pengaduan (tgl_pengaduan,nik,isi_laporan,foto,status) VALUES('$tgl','$nik','$isi','$foto','$status')");
move_uploaded_file($file, "foto/".$foto);

if ($sql) 
			{    
				 echo "<script>alert('Berhasil Disimpan!'); window.location='masyarakat.php?url=lihat_pengaduan'</script>";
              } else {
                  echo '<script language="javascript">alert("Gagal Disimpan") window.history.back();</script>';
              }
           }
       ?>