<?php

	//session_start();
	//if(!isset($_SESSION['email'])){
	//	header("Location: login.php");
	//}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<title>Galeri - Dolen</title>
</head>
<body>

	<nav>
    	<div class="nav-wrapper">
    		<div class="container" style="width:90% !important;">
      			<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      			<ul class="left hide-on-med-and-down">
        			<li><a href="index.php">Beranda</a></li>
        			<li><a href="bantuan.php">Bantuan</a></li>
        			<li><a href="kontak.php">Kontak</a></li>
      			</ul>
      			<a href="#" class="brand-logo center"><i style="font-size:26px;text-transform:capitalize;">Dolen</i></a>
      			<ul class="right hide-on-med-and-down">
        			<li><a href="tiket.php">Tiket</a></li>
        			<li><a href="jadwal.php">Jadwal</a></li>
        			<li><a href="galeri.php" style="opacity:100%;">Galeri</a></li>
      			</ul>
      		</div>
    	</div>
  	</nav>

  	<!--mobile navbar-->
  	<ul class="sidenav" id="mobile-demo">
    	<li><a href="sass.html">Beranda</a></li>
    	<li><a href="badges.html">Bantuan</a></li>
    	<li><a href="collapsible.html">Kontak</a></li>
  	</ul>
  	<!--end-->

  	<div class="content container" style="width:87% !important;">
  		<div class="row center">
  			<div class="col s3">
  				<div class="demi-img">
  					<img src="img/hutan_bambu1.jpg" class="img-preview">
  					<a href="#modal1" class="modal-trigger">
  						<div class="overlay">
  							<div class="img-note">Hutan Bambu</div>
  						</div>
  					</a>
  				</div>
  				<!--modal-->
  				<div id="modal1" class="modal img-modal">
    				<div class="modal-content">
      					<h5>Hutan Bambu</h5>
      					<p style="color:#777;margin-bottom:0px !important;">Berikut beberapa foto dari wisata Hutan Bambu.</p>
      					<p style="margin-top:6px !important;color:#999;font-size:12px;">Jl. Raya Marina Asri, Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur 60111</p>
      					<table style="width:10% !important;">
      						<tr class="img-table">
      							<td><img src="img/hutan_bambu1.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/hutan_bambu2.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/hutan_bambu3.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/hutan_bambu4.jpg" class="img-details materialboxed"></td>
      						</tr>
      					</table>
    				</div>
    				<div class="modal-footer">
      					<a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
    				</div>
  				</div>
  				<!--end-->
  			</div>
  			<div class="col s3">
  				<div class="demi-img">
  					<img src="img/hutan_mangrove_gununganyar1.jpg" class="img-preview">
  					<a href="#modal2" class="modal-trigger">
  						<div class="overlay">
  							<div class="img-note">Hutan Mangr...</div>
  						</div>
  					</a>
  				</div>
  				<!--modal-->
  				<div id="modal2" class="modal img-modal">
    				<div class="modal-content">
      					<h5>Hutan Mangrove Gununganyar</h5>
      					<p style="color:#777;margin-bottom:0px !important;">Berikut beberapa foto dari wisata Hutan Mangrove Gununganyar.</p>
      					<p style="margin-top:6px !important;color:#999;font-size:12px;">Jalan Medokan Sawah Timur Segoro Tambak Sedati, Medokan Ayu, Kec. Rungkut, Kota SBY, Jawa Timur 60295</p>
      					<table style="width:10% !important;">
      						<tr class="img-table">
      							<td><img src="img/hutan_mangrove_gununganyar1.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/hutan_mangrove_gununganyar2.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/hutan_mangrove_gununganyar3.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/hutan_mangrove_gununganyar4.jpg" class="img-details materialboxed"></td>
      						</tr>
      					</table>
    				</div>
    				<div class="modal-footer">
      					<a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
    				</div>
  				</div>
  				<!--end-->
  			</div>
  			<div class="col s3">
  				<div class="demi-img">
  					<img src="img/kebun_bibit_wonorejo1.jpg" class="img-preview">
  					<a href="#modal3" class="modal-trigger">
  						<div class="overlay">
  							<div class="img-note">Kebun Bibit...</div>
  						</div>
  					</a>
  				</div>
  				<!--modal-->
  				<div id="modal3" class="modal img-modal">
    				<div class="modal-content">
      					<h5>Kebun Bibit Wonorejo</h5>
      					<p style="color:#777;margin-bottom:0px !important;">Berikut beberapa foto dari wisata Kebun Bibit Wonorejo.</p>
      					<p style="margin-top:6px !important;color:#999;font-size:12px;">Jl. Raya Wonorejo, Wonorejo, Rungkut, Surabaya City, East Java 60296</p>
      					<table style="width:10% !important;">
      						<tr class="img-table">
      							<td><img src="img/kebun_bibit_wonorejo1.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/kebun_bibit_wonorejo2.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/kebun_bibit_wonorejo3.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/kebun_bibit_wonorejo4.jpg" class="img-details materialboxed"></td>
      						</tr>
      					</table>
    				</div>
    				<div class="modal-footer">
      					<a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
    				</div>
  				</div>
  				<!--end-->
  			</div>
  			<div class="col s3">
  				<div class="demi-img">
  					<img src="img/kebun_binatang1.jpg" class="img-preview">
  					<a href="#modal4" class="modal-trigger">
  						<div class="overlay">
  							<div class="img-note">Kebun Binat...</div>
  						</div>
  					</a>
  				</div>
  				<!--modal-->
  				<div id="modal4" class="modal img-modal">
    				<div class="modal-content">
      					<h5>Kebun Binatang Surabaya</h5>
      					<p style="color:#777;margin-bottom:0px !important;">Berikut beberapa foto dari wisata Kebun Binatang Surabaya.</p>
      					<p style="margin-top:6px !important;color:#999;font-size:12px;">Jl. Setail No.1, Darmo, Kec. Wonokromo, Kota SBY, Jawa Timur 60241</p>
      					<table style="width:10% !important;">
      						<tr class="img-table">
      							<td><img src="img/kebun_binatang1.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/kebun_binatang2.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/kebun_binatang3.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/kebun_binatang4.jpg" class="img-details materialboxed"></td>
      						</tr>
      					</table>
    				</div>
    				<div class="modal-footer">
      					<a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
    				</div>
  				</div>
  				<!--end-->
  			</div>
  		</div>
  		<div class="row center">
  			<div class="col s3">
  				<div class="demi-img">
  					<img src="img/klenteng_sanggar_agung1.jpg" class="img-preview">
  					<a href="#modal5" class="modal-trigger">
  						<div class="overlay">
  							<div class="img-note">Klenteng Sa...</div>
  						</div>
  					</a>
  				</div>
  				<!--modal-->
  				<div id="modal5" class="modal img-modal">
    				<div class="modal-content">
      					<h5>Klenteng Sanggar Agung</h5>
      					<p style="color:#777;margin-bottom:0px !important;">Berikut beberapa foto dari wisata Klenteng Sanggar Agung.</p>
      					<p style="margin-top:6px !important;color:#999;font-size:12px;">Jl. Sukolilo No.100, Sukolilo Baru, Kec. Bulak, Kota SBY, Jawa Timur 60122</p>
      					<table style="width:10% !important;">
      						<tr class="img-table">
      							<td><img src="img/klenteng_sanggar_agung1.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/klenteng_sanggar_agung2.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/klenteng_sanggar_agung3.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/klenteng_sanggar_agung4.jpg" class="img-details materialboxed"></td>
      						</tr>
      					</table>
    				</div>
    				<div class="modal-footer">
      					<a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
    				</div>
  				</div>
  				<!--end-->
  			</div>
  			<div class="col s3">
  				<div class="demi-img">
  					<img src="img/monumen_kapal_selam1.jpg" class="img-preview">
  					<a href="#modal6" class="modal-trigger">
  						<div class="overlay">
  							<div class="img-note">Monumen Kap...</div>
  						</div>
  					</a>
  				</div>
  				<!--modal-->
  				<div id="modal6" class="modal img-modal">
    				<div class="modal-content">
      					<h5>Monumen Kapal Selam</h5>
      					<p style="color:#777;margin-bottom:0px !important;">Berikut beberapa foto dari wisata Monumen Kapal Selam.</p>
      					<p style="margin-top:6px !important;color:#999;font-size:12px;">Jl. Pemuda No.39, Embong Kaliasin, Kec. Genteng, Kota SBY, Jawa Timur 60271</p>
      					<table style="width:10% !important;">
      						<tr class="img-table">
      							<td><img src="img/monumen_kapal_selam1.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/monumen_kapal_selam2.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/monumen_kapal_selam3.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/monumen_kapal_selam4.jpg" class="img-details materialboxed"></td>
      						</tr>
      					</table>
    				</div>
    				<div class="modal-footer">
      					<a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
    				</div>
  				</div>
  				<!--end-->
  			</div>
  			<div class="col s3">
  				<div class="demi-img">
  					<img src="img/museum_kesehatan1.jpg" class="img-preview">
  					<a href="#modal7" class="modal-trigger">
  						<div class="overlay">
  							<div class="img-note">Museum Kese...</div>
  						</div>
  					</a>
  				</div>
  				<!--modal-->
  				<div id="modal7" class="modal img-modal">
    				<div class="modal-content">
      					<h5>Museum Kesehatan</h5>
      					<p style="color:#777;margin-bottom:0px !important;">Berikut beberapa foto dari wisata Museum Kesehatan.</p>
      					<p style="margin-top:6px !important;color:#999;font-size:12px;">Jl. Raya Wonorejo, Wonorejo, Rungkut, Surabaya City, East Java 60296</p>
      					<table style="width:10% !important;">
      						<tr class="img-table">
      							<td><img src="img/museum_kesehatan1.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/museum_kesehatan2.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/museum_kesehatan3.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/museum_kesehatan4.jpg" class="img-details materialboxed"></td>
      						</tr>
      					</table>
    				</div>
    				<div class="modal-footer">
      					<a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
    				</div>
  				</div>
  				<!--end-->
  			</div>
  			<div class="col s3">
  				<div class="demi-img">
  					<img src="img/museum_wr_supratman1.jpg" class="img-preview">
  					<a href="#modal8" class="modal-trigger">
  						<div class="overlay">
  							<div class="img-note">Museum W.R....</div>
  						</div>
  					</a>
  				</div>
  				<!--modal-->
  				<div id="modal8" class="modal img-modal">
    				<div class="modal-content">
      					<h5>Museum W.R. Supratman</h5>
      					<p style="color:#777;margin-bottom:0px !important;">Berikut beberapa foto dari wisata Museum W.R. Supratman.</p>
      					<p style="margin-top:6px !important;color:#999;font-size:12px;">Jl. Mangga No.21, Tambaksari, Kec. Tambaksari, Kota SBY, Jawa Timur 60136</p>
      					<table style="width:10% !important;">
      						<tr class="img-table">
      							<td><img src="img/museum_wr_supratman1.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/museum_wr_supratman2.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/museum_wr_supratman3.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/museum_wr_supratman4.jpg" class="img-details materialboxed"></td>
      						</tr>
      					</table>
    				</div>
    				<div class="modal-footer">
      					<a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
    				</div>
  				</div>
  				<!--end-->
  			</div>
  		</div>
  		<div class="row center">
  			<div class="col s3">
  				<div class="demi-img">
  					<img src="img/sampoerna1.jpg" class="img-preview">
  					<a href="#modal9" class="modal-trigger">
  						<div class="overlay">
  							<div class="img-note"> Sampoerna</div>
  						</div>
  					</a>
  				</div>
  				<!--modal-->
  				<div id="modal9" class="modal img-modal">
    				<div class="modal-content">
      					<h5>Sampoerna</h5>
      					<p style="color:#777;margin-bottom:0px !important;">Berikut beberapa foto dari wisata Sampoerna.</p>
      					<p style="margin-top:6px !important;color:#999;font-size:12px;">Taman Sampoerna No.6, Krembangan Utara, Kec. Pabean Cantikan, Kota SBY, Jawa Timur 60163</p>
      					<table style="width:10% !important;">
      						<tr class="img-table">
      							<td><img src="img/sampoerna1.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/sampoerna2.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/sampoerna3.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/sampoerna4.jpg" class="img-details materialboxed"></td>
      						</tr>
      					</table>
    				</div>
    				<div class="modal-footer">
      					<a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
    				</div>
  				</div>
  				<!--end-->
  			</div>
  			<div class="col s3">
  				<div class="demi-img">
  					<img src="img/sunan_ampel1.jpg" class="img-preview">
  					<a href="#modal10" class="modal-trigger">
  						<div class="overlay">
  							<div class="img-note">Sunan Ampel</div>
  						</div>
  					</a>
  				</div>
  				<!--modal-->
  				<div id="modal10" class="modal img-modal">
    				<div class="modal-content">
      					<h5>Sunan Ampel</h5>
      					<p style="color:#777;margin-bottom:0px !important;">Berikut beberapa foto dari wisata Sunan Ampel.</p>
      					<p style="margin-top:6px !important;color:#999;font-size:12px;">Jl. Ampel Masjid No.43, Ampel, Kecamatan Semampir, Surabaya, Jawa Timur</p>
      					<table style="width:10% !important;">
      						<tr class="img-table">
      							<td><img src="img/sunan_ampel1.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/sunan_ampel2.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/sunan_ampel3.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/sunan_ampel4.jpg" class="img-details materialboxed"></td>
      						</tr>
      					</table>
    				</div>
    				<div class="modal-footer">
      					<a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
    				</div>
  				</div>
  				<!--end-->
  			</div>
  			<div class="col s3">
  				<div class="demi-img">
  					<img src="img/taman_bungkul1.png" class="img-preview">
  					<a href="#modal11" class="modal-trigger">
  						<div class="overlay">
  							<div class="img-note">Taman Bungkul</div>
  						</div>
  					</a>
  				</div>
  				<!--modal-->
  				<div id="modal11" class="modal img-modal">
    				<div class="modal-content">
      					<h5>Taman Bungkul</h5>
      					<p style="color:#777;margin-bottom:0px !important;">Berikut beberapa foto dari wisata Taman Bungkul.</p>
      					<p style="margin-top:6px !important;color:#999;font-size:12px;">Taman Bungkul St, Darmo, Wonokromo, Surabaya City, East Java 60241</p>
      					<table style="width:10% !important;">
      						<tr class="img-table">
      							<td><img src="img/taman_bungkul1.png" class="img-details materialboxed"></td>
      							<td><img src="img/taman_bungkul2.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/taman_bungkul3.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/taman_bungkul4.jpg" class="img-details materialboxed"></td>
      						</tr>
      					</table>
    				</div>
    				<div class="modal-footer">
      					<a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
    				</div>
  				</div>
  				<!--end-->
  			</div>
  			<div class="col s3">
  				<div class="demi-img">
  					<img src="img/tugu_pahlawan1.jpg" class="img-preview">
  					<a href="#modal12" class="modal-trigger">
  						<div class="overlay">
  							<div class="img-note">Tugu Pahlaw...</div>
  						</div>
  					</a>
  				</div>
  				<!--modal-->
  				<div id="modal12" class="modal img-modal">
    				<div class="modal-content">
      					<h5>Tugu Pahlawan</h5>
      					<p style="color:#777;margin-bottom:0px !important;">Berikut beberapa foto dari wisata Tugu Pahlawan.</p>
      					<p style="margin-top:6px !important;color:#999;font-size:12px;">Pahlawan St, Alun-alun Contong, Bubutan, Surabaya City, East Java 60174</p>
      					<table style="width:10% !important;">
      						<tr class="img-table">
      							<td><img src="img/tugu_pahlawan1.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/tugu_pahlawan2.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/tugu_pahlawan3.jpg" class="img-details materialboxed"></td>
      							<td><img src="img/tugu_pahlawan4.jpg" class="img-details materialboxed"></td>
      						</tr>
      					</table>
    				</div>
    				<div class="modal-footer">
      					<a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
    				</div>
  				</div>
  				<!--end-->
  			</div>
  		</div>
  	</div>

  	<div class="footer">
  		<div class="left">Dolen - Kelompok 12</div>
  		<div class="right">Pemrograman Web A081</div>
  	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.modal').modal();
		$('.materialboxed').materialbox();
  	});
</script>
</body>
</html>