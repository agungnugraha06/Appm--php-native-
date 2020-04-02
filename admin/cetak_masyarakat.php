<?php 
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>APPM-Masyarakat</title>
    <link rel="shortcut icon" href="../img/favicon.png">

  <!-- Custom fonts for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

 
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
             
            </div>
            <div class="card-body">
               <h3 class="m-0 font-weight-bold text-secondary" align="center">PEMERINTAH KABUPATEN PANGANDARAN</h3>
               <h4 class="m-0 font-weight-bold text-secondary"align="center">DESA CIGANJENG KEC.PADAHERANG</h4>
               <h6 class="m-0 font-weight-bold text-secondary"align="center">Jalan Raya Pangandaran Desa Ciganjeng Kode POS 3654</h6>
               <br><br><hr>

                 <h3 class="m-0 font-weight-bold text-secondary" align="center">Laporan Data Masyarakat</h3>
                 <br><br>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 
                    <tr>
                      <th>No.</th>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Telp</th>
                    </tr>
                  
                  <?php
                  $no=1;
                  require '../koneksi.php';
                  $sql=mysqli_query($koneksi, "SELECT * FROM masyarakat") ;
                  while($data=mysqli_fetch_array($sql)) {
                  ?>
  
                 
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $data['nik']; ?></td>
                      <td><?php echo $data['nama']; ?></td>
                      <td><?php echo $data['username']; ?></td>
                      <td><?php echo $data['password']; ?></td>
                      <td><?php echo $data['telp']; ?></td>
                    </tr>
                  
                <?php } ?>
                </table>
            </div>
              <br>
                <br>
                 <h6 class="m-0 font-weight-bold text-secondary"align="right">Ciganjeng, <?php echo date('d F Y'); ?> <br></h6>
                 <h6 class="m-0 font-weight-bold text-secondary"align="right">Petugas, <br></h6>
                 <br><br><br><br>
                 <h6 class="m-0 font-weight-bold text-secondary"align="right"><?php echo $_SESSION['nama']; ?> <br></h6>
              </div>
          </div>

   <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Agung Nugraha 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
      


  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>
