<?php 
if (isset($_GET['url']))
{
	$url=$_GET['url'];

	switch($url)
	{
		
		case 'verifikasi_pengaduan';
		include 'verifikasi_pengaduan.php';
		break;

		case 'detail_pengaduan';
		include 'detail_pengaduan.php';
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


    case 'preview_petugas';
    include 'preview_petugas.php';
    break;

    case 'lihat_masyarakat';
    include 'lihat_masyarakat.php';
    break;

    case 'preview_masyarakat';
    include 'preview_masyarakat.php';
    break;

    case 'profil_admin';
    include 'profil_admin.php';
    break;

    case 'preview_pengaduan';
    include 'preview_pengaduan.php';
    break;

    case 'preview_tanggapan';
    include 'preview_tanggapan.php';
    break;

    case 'lihat_pengaduan';
    include 'lihat_pengaduan.php';
    break;

    case 'lihat_tanggapan';
    include 'lihat_tanggapan.php';
    break;




	}
}

else
{
	?>



		Selamat Datang, <h3> <?php echo $_SESSION['nama']; 


		require '../koneksi.php';
		$sql=mysqli_query($koneksi,"SELECT * FROM pengaduan WHERE status='sedang diproses'");
		if ($cek=mysqli_num_rows($sql))
		{
		?>
		<hr>

			<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><b>Dashboard</b></h1>
          </div>

          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <?php 
                include "../koneksi.php";
                $query = mysqli_query($koneksi,"SELECT * FROM petugas ");
                $jumlah = mysqli_num_rows($query); 
                ?>
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Petugas</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah; ?> Orang</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <?php 
                include "../koneksi.php";
                $query = mysqli_query($koneksi,"SELECT * FROM pengaduan where status='belum diproses'");
                $jumlah = mysqli_num_rows($query); 
                ?>
              <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Laporan Belum Diproses</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $jumlah; ?> Laporan</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-exclamation-circle fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

                 <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Laporan Sedang Diproses</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $cek; ?> Laporan</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-recycle fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <?php 
                include "../koneksi.php";
                $query = mysqli_query($koneksi,"SELECT * FROM pengaduan where status='selesai'");
                $jumlah = mysqli_num_rows($query); 
                ?>
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Laporan Ditanggapi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah; ?> Laporan</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-check fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>

      



	<?php
	} }
	?>









 