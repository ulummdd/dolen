<?php
	
	include_once("config.php");
	$show = mysqli_query($connect, "SELECT * FROM tiket ORDER BY id_tiket DESC");

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
	<title>Tiket -  Dolen</title>
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
        			<li><a href="tiket.php" style="opacity:100%;">Tiket</a></li>
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
  					<h4>Tiket</h4>
  					<p style="margin-bottom:6px !important">Halaman ini untuk membeli tiket bus ke tempat wisata.</p>
  					<p style="margin:0px !important;">Untuk <i>online</i>, sistem pembayaran melewati nomor WhatsApp admin.
  				</div>
  			</div>
  			<div class="col s12">
  				<div class="list-card-ticket">
  					<div class="row">
  					<?php
  						while($data = mysqli_fetch_array($show)){
    						echo "<div class='col s4'>";
      						echo "<div class='card' style='margin-top:30px;box-shadow:none !important;border-radius:18px !important;border:1px solid #777;'>";
        						echo "<div class='card-content'>";
          							echo "<span class='card-title'>".$data['nama_wisata']."</span>";
          							echo "<span class='detail-ticket'>".$data['waktu_berangkat']."</span><br>";
  									echo "<p class='price-ticket' style='margin-bottom:0px !important;'>Rp".$data['harga_tiket']."<span style='font-size:12px;margin-left:6px;font-weight:normal;'>Tersedia ".$data['kursi_tersedia']." Kursi</span></p>";
        						echo "</div>";
        						echo "<div class='card-action' style='border-radius:0px 0px 18px 18px;border-top:1px solid #ddd'>";
          							echo "<a href='https://wa.me/0895631651536?text=Halo,%20Saya%20ingin%20beli%20tiket!' style='color:#333;text-decoration:underline;text-transform:capitalize;'>Beli tiket</a>";
        						echo "</div>";
      						echo "</div>";
    					echo "</div>";
    					}
    				?>
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