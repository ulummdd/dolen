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
	<title>Bantuan -  Dolen</title>
</head>
<body>

	<nav>
    	<div class="nav-wrapper">
    		<div class="container" style="width:90% !important;">
      			<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      			<ul class="left hide-on-med-and-down">
        			<li><a href="index.php">Beranda</a></li>
        			<li><a href="bantuan.php" style="opacity:100%;">Bantuan</a></li>
        			<li><a href="kontak.php">Kontak</a></li>
      			</ul>
      			<a href="#" class="brand-logo center"><i style="font-size:26px;text-transform:capitalize;">Dolen</i></a>
      			<ul class="right hide-on-med-and-down">
        			<li><a href="tiket.php">Tiket</a></li>
        			<li><a href="jadwal.php">Jadwal</a></li>
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
  					<h4>Bantuan</h4>
  					<p style="margin-bottom:6px !important">Halaman ini berisi FAQ (Frequently Asked Questions).</p>
  					<p style="margin:0px !important;">Apabila ada pertanyaan yang belum terjawab, kirim pesanmu ke halaman <a href="kontak.php" style="color:#333;text-decoration:underline;font-weight:bold;">Kontak</a></p>
  				</div>
  			</div>
  			<div class="col s12">
  				<ul class="collapsible help-faq">
    				<li>
      					<div class="collapsible-header">Pembayaran apa saja yang diterima?</div>
      					<div class="collapsible-body"><span>Dolen menerima pembayaran melalui Tunai (Pembelian di tempat), E-wallet dan bank.</span></div>
    				</li>
    				<li>
      					<div class="collapsible-header">Kapan pemesanan paling lambat dapat dilakukan?</div>
      					<div class="collapsible-body"><span>Selama kursi masih ada, anda dapat membeli tiket tersebut.</span></div>
    				</li>
    				<li>
      					<div class="collapsible-header">Bagaimana cara melakukan refund (pengembalian dana)?</div>
      					<div class="collapsible-body"><span>Refund dapat dilakukan secara langsung di pusat lokasi Dolen dengan waktu H-1 sebelum keberangkatan.</span></div>
    				</li>
    				<li>
      					<div class="collapsible-header">Apakah saya akan dikenakan biaya tambahan untuk pembayaran di tempat?</div>
      					<div class="collapsible-body"><span>Tidak, harga tiket yang tertera di web dan di lokasi (onsite) akan tetap sama, tidak ada biaya tambahan yang harus dibayarkan untuk membayar harga tiket secara tunai di tempat langsung.</span></div>
    				</li>
  				</ul>
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
    	$('textarea#message').characterCounter();
    	$('.collapsible').collapsible();
  	});
</script>
</body>
</html>