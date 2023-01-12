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
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<title>Jadwal -  Dolen</title>
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
        			<li><a href="jadwal.php" style="opacity:100%;">Jadwal</a></li>
        			<li><a href="galeri.php">Galeri</a></li>
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
  		<div class="row">
  			<div class="col s12">
  				<div class="title-help">
  					<h4>Jadwal</h4>
  					<p style="margin-bottom:6px !important">Halaman ini untuk mengecek jadwal keberangkatan bus ke tempat wisata.</p>
  					<p style="margin:0px !important;">Apabila ingin memesan tiket, pergi ke halaman <a href="kontak.php" style="color:#333;text-decoration:underline;font-weight:bold;">Tiket</a></p>
  				</div>
  			</div>
  			<div class="col s12">
  				<div class="list-btn-schedule">
  					<button data-target="modal1" class="btn modal-trigger btn-schedule">Hutan Bambu</button>
  					<button data-target="modal2" class="btn modal-trigger btn-schedule">Hutan Mangrove Gununganyar</button>
  					<button data-target="modal3" class="btn modal-trigger btn-schedule">Kebun Bibit Wonorejo</button>
  					<button data-target="modal4" class="btn modal-trigger btn-schedule">Kebun Binatang Surabaya</button>
  					<button data-target="modal5" class="btn modal-trigger btn-schedule">Klenteng Sanggar Agung</button>
  					<button data-target="modal6" class="btn modal-trigger btn-schedule">Monumen Kapal Selam</button>
  					<button data-target="modal7" class="btn modal-trigger btn-schedule">Museum Kesehatan</button>
  					<button data-target="modal8" class="btn modal-trigger btn-schedule">Museum W.R. Supratman</button>
  					<button data-target="modal9" class="btn modal-trigger btn-schedule">Sampoerna</button>
  					<button data-target="modal10" class="btn modal-trigger btn-schedule">Sunan Ampel</button>
  					<button data-target="modal11" class="btn modal-trigger btn-schedule">Taman Bungkul</button>
  					<button data-target="modal12" class="btn modal-trigger btn-schedule">Tugu Pahlawan</button>
  				</div>
  				<div class="modal-schedule">
  					<div id="modal1" class="modal bottom-sheet" style="max-height:60% !important;">
    					<div class="modal-content">
      						<h5>Hutan Bambu</h5>
      						<p style="color:#777;margin:12px 0px 6px 0px !important;">Berikut jadwal keberangkatan bus ke wisata Hutan Bambu</p>
      						<span class="note-schedule">*Jadwal dapat berubah sewaktu-waktu jika ada beberapa kendala</span>
      						<div class="row">
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Kamis</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Jumat</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Sabtu</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Minggu</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      						</div>
    					</div>
    					<div class="modal-footer">
      						<a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
    					</div>
  					</div>
  					<div id="modal2" class="modal bottom-sheet" style="max-height:60% !important;">
    					<div class="modal-content">
      						<h5>Hutan Mangrove Gununganyar</h5>
      						<p style="color:#777;margin:12px 0px 6px 0px !important;">Berikut jadwal keberangkatan bus ke wisata Hutan Mangrove Gununganyar</p>
      						<span class="note-schedule">*Jadwal dapat berubah sewaktu-waktu jika ada beberapa kendala</span>
      						<div class="row">
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Kamis</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Jumat</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Sabtu</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Minggu</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      						</div>
    					</div>
    					<div class="modal-footer">
      						<a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
    					</div>
  					</div>
  					<div id="modal3" class="modal bottom-sheet" style="max-height:60% !important;">
    					<div class="modal-content">
      						<h5>Kebun Bibit Wonorejo</h5>
      						<p style="color:#777;margin:12px 0px 6px 0px !important;">Berikut jadwal keberangkatan bus ke wisata Kebun Bibit Wonorejo</p>
      						<span class="note-schedule">*Jadwal dapat berubah sewaktu-waktu jika ada beberapa kendala</span>
      						<div class="row">
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Kamis</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Jumat</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Sabtu</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Minggu</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      						</div>
    					</div>
    					<div class="modal-footer">
      						<a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
    					</div>
  					</div>
  					<div id="modal4" class="modal bottom-sheet" style="max-height:60% !important;">
    					<div class="modal-content">
      						<h5>Kebun Binatang Surabaya</h5>
      						<p style="color:#777;margin:12px 0px 6px 0px !important;">Berikut jadwal keberangkatan bus ke wisata Kebun Binatang Surabaya</p>
      						<span class="note-schedule">*Jadwal dapat berubah sewaktu-waktu jika ada beberapa kendala</span>
      						<div class="row">
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Kamis</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Jumat</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Sabtu</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Minggu</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      						</div>
    					</div>
    					<div class="modal-footer">
      						<a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
    					</div>
  					</div>
  					<div id="modal5" class="modal bottom-sheet" style="max-height:60% !important;">
    					<div class="modal-content">
      						<h5>Klenteng Sanggar Agung</h5>
      						<p style="color:#777;margin:12px 0px 6px 0px !important;">Berikut jadwal keberangkatan bus ke wisata Klenteng Sanggar Agung</p>
      						<span class="note-schedule">*Jadwal dapat berubah sewaktu-waktu jika ada beberapa kendala</span>
      						<div class="row">
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Kamis</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Jumat</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Sabtu</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Minggu</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      						</div>
    					</div>
    					<div class="modal-footer">
      						<a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
    					</div>
  					</div>
  					<div id="modal6" class="modal bottom-sheet" style="max-height:60% !important;">
    					<div class="modal-content">
      						<h5>Monumen Kapal Selam</h5>
      						<p style="color:#777;margin:12px 0px 6px 0px !important;">Berikut jadwal keberangkatan bus ke wisata Monumen Kapal Selam</p>
      						<span class="note-schedule">*Jadwal dapat berubah sewaktu-waktu jika ada beberapa kendala</span>
      						<div class="row">
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Kamis</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Jumat</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Sabtu</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Minggu</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      						</div>
    					</div>
    					<div class="modal-footer">
      						<a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
    					</div>
  					</div>
  					<div id="modal7" class="modal bottom-sheet" style="max-height:60% !important;">
    					<div class="modal-content">
      						<h5>Museum Kesehatan</h5>
      						<p style="color:#777;margin:12px 0px 6px 0px !important;">Berikut jadwal keberangkatan bus ke wisata Museum Kesehatan</p>
      						<span class="note-schedule">*Jadwal dapat berubah sewaktu-waktu jika ada beberapa kendala</span>
      						<div class="row">
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Kamis</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Jumat</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Sabtu</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Minggu</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      						</div>
    					</div>
    					<div class="modal-footer">
      						<a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
    					</div>
  					</div>
  					<div id="modal8" class="modal bottom-sheet" style="max-height:60% !important;">
    					<div class="modal-content">
      						<h5>Museum W.R. Supratman</h5>
      						<p style="color:#777;margin:12px 0px 6px 0px !important;">Berikut jadwal keberangkatan bus ke wisata Museum W.R. Supratman</p>
      						<span class="note-schedule">*Jadwal dapat berubah sewaktu-waktu jika ada beberapa kendala</span>
      						<div class="row">
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Kamis</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Jumat</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Sabtu</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Minggu</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      						</div>
    					</div>
    					<div class="modal-footer">
      						<a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
    					</div>
  					</div>
  					<div id="modal9" class="modal bottom-sheet" style="max-height:60% !important;">
    					<div class="modal-content">
      						<h5>Sampoerna</h5>
      						<p style="color:#777;margin:12px 0px 6px 0px !important;">Berikut jadwal keberangkatan bus ke wisata Sampoerna</p>
      						<span class="note-schedule">*Jadwal dapat berubah sewaktu-waktu jika ada beberapa kendala</span>
      						<div class="row">
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Kamis</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Jumat</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Sabtu</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Minggu</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      						</div>
    					</div>
    					<div class="modal-footer">
      						<a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
    					</div>
  					</div>
  					<div id="modal10" class="modal bottom-sheet" style="max-height:60% !important;">
    					<div class="modal-content">
      						<h5>Sunan Ampel</h5>
      						<p style="color:#777;margin:12px 0px 6px 0px !important;">Berikut jadwal keberangkatan bus ke wisata Sunan Ampel</p>
      						<span class="note-schedule">*Jadwal dapat berubah sewaktu-waktu jika ada beberapa kendala</span>
      						<div class="row">
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Kamis</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Jumat</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Sabtu</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Minggu</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      						</div>
    					</div>
    					<div class="modal-footer">
      						<a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
    					</div>
  					</div>
  					<div id="modal11" class="modal bottom-sheet" style="max-height:60% !important;">
    					<div class="modal-content">
      						<h5>Taman Bungkul</h5>
      						<p style="color:#777;margin:12px 0px 6px 0px !important;">Berikut jadwal keberangkatan bus ke wisata Taman Bungkul</p>
      						<span class="note-schedule">*Jadwal dapat berubah sewaktu-waktu jika ada beberapa kendala</span>
      						<div class="row">
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Kamis</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Jumat</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Sabtu</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Minggu</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      						</div>
    					</div>
    					<div class="modal-footer">
      						<a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
    					</div>
  					</div>
  					<div id="modal12" class="modal bottom-sheet" style="max-height:60% !important;">
    					<div class="modal-content">
      						<h5>Tugu Pahlawan</h5>
      						<p style="color:#777;margin:12px 0px 6px 0px !important;">Berikut jadwal keberangkatan bus ke wisata Tugu Pahlawan</p>
      						<span class="note-schedule">*Jadwal dapat berubah sewaktu-waktu jika ada beberapa kendala</span>
      						<div class="row">
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Kamis</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Jumat</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Sabtu</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      							<div class="col s3">
      								<table style="margin-top:20px !important;">
      									<tr>
      										<th colspan="3">Minggu</th>
      									</tr>
      									<tr>
      										<td>08:00</td>
      										<td>10:00</td>
      										<td>12:00</td>
      									</tr>
      									<tr>
      										<td>14:00</td>
      										<td>16:00</td>
      									</tr>
      								</table>
      							</div>
      						</div>
    					</div>
    					<div class="modal-footer">
      						<a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
    					</div>
  					</div>
  				</div>
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
	$(document).ready(function() {
    	$('.modal').modal();
  	});
</script>
</body>
</html>