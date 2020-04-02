<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Detail Pengaduan</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <div class="card shadow">
      <div class="card-header">
            <h4>Tanggapan</h4>
      </div>

      <div class="card-body">
        
        <div class="form-group cols-sm-6">
            <a href="?url=lihat_pengaduan" class="btn btn-info btn-icon-split">
                <span class="icon text-white-20">
                    <i class="fas fa-arrow-left"></i>
                    </span>
                <span class="text">Kembali</span>                        
            </a>
        </div>

          <form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">

            <?php 
            require 'koneksi.php';

            $sql=mysqli_query($koneksi, "SELECT * FROM pengaduan, tanggapan WHERE tanggapan.id_pengaduan='$_GET[id]' and tanggapan.id_pengaduan=pengaduan.id_pengaduan");

            $cek=mysqli_num_rows($sql);
            if ($cek<1)//jika tidak ditemukan 
            {
              echo "<font color='red'>Mohon Bersabar, Pengaduan Belum di Tanggapi </font>";
            } 
              else 
            { 
              if ($data=mysqli_fetch_array($sql)) 
              {

            ?>
              <div class="form-group cols-sm-6">
                  <label>Tanggal Tanggapan</label>
                  <input type="text" name="tgl_tanggapan" value="<?php echo $data['tgl_tanggapan']; ?>" class="form-control" readonly>
              </div>

              <div class="form-group cols-mx-6">
                  <label>Isi Laporan</label>
                  <textarea class="form-control" name="isi_laporan" rows="6" readonly><?php echo $data['isi_laporan']; ?>
                  </textarea>
              </div>

              <div class="form-group cols-mx-6">
                  <label>Tanggapan dari :</label><?php echo $data['id_petugas']; ?>
                  <textarea class="form-control" name="tanggapan" rows="6" readonly><?php echo $data['tanggapan']; ?>
                  </textarea>
              </div>

            <?php } } ?>
          </form>
        </div> 
      </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>