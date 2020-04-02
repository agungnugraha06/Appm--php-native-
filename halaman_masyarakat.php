<?php 
if (isset($_GET['url']))
{
	$url=$_GET['url'];

	switch($url)
	{
		case 'tulis_pengaduan';
		include 'tulis_pengaduan.php';
		break;

		case 'lihat_pengaduan';
		include 'lihat_pengaduan.php';
		break;

		case 'detail_pengaduan';
		include 'detail_pengaduan.php';
		break;

		case 'lihat_tanggapan';
		include 'lihat_tanggapan.php';
		break;

		case 'profil_masyarakat';
		include 'profil_masyarakat.php';
		break;


	}
}

else
{
	?>
	<hr>

     <div>
     	<h3>Apa itu APPM?</h3>
     	
     	<h6 class="mb-4">APPM merupakan Aplikasi Pelaporan Pengaduan Masyarakat yang dibuat untuk melaporkan kejadian-kejadian di lingkuangan masyarakat baik itu melakukan tindak pidana dan kekerasan</h6>
     	<hr>

     	<h3>Apa itu Pengaduan ?</h3>
     	<h6>Pengaduan adalah pemberitahuan yang disertai permintaan oleh pihak yang berkepentingan kepada pejabat yang berwenang untuk menindak menurut Hukum, terhadap seseorang yang telah melakukan Tindak Pidana Aduan yang merugikan.

     	Penjelasan :
		Yang berkepentingan  adalah  korban itu sendiri (tidak boleh diwakilkan) atau pihak yang dirugikan menurut Hukum.
		Sedangkan Delik Aduan adalah tindak pidana tertentu yang penyelesaiannya menurut Hukum dapat dilakukan oleh Pejabat yang berwenang apabila ada permintaan untuk dituntut perkaranya atau pelakunya (Pasal 72 KUHP).

		Apabila seorang anggota Polri mengetahui terjadinya Tindak Pidana Aduan, tanpa menunggu adanya Aduan dari orang yang dirugikan tersebut, maka penyelidikan dapat dilakukan. Tetapi apabila dilakukan penyidikan sampai tuntas hingga perkaranya diserahkan ke Kejaksaan harus ada pengaduan terlebih dahulu dari orang yang dirugikannya.</h6>
     </div>


	<?php 
}

?>
