<?php
	
	include_once("config.php");
	$show = mysqli_query($connect, "SELECT * FROM informasi ORDER BY id_informasi DESC");

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
	<title>Beranda - Dolen</title>
</head>
<body>

	<nav>
    	<div class="nav-wrapper">
    		<div class="container" style="width:90% !important;">
      			<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      			<ul class="left hide-on-med-and-down">
        			<li><a href="index.php" style="opacity:100%;">Beranda</a></li>
        			<li><a href="bantuan.php">Bantuan</a></li>
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
  			<div class="col s8">
  				<div class="activity">
  					<p class="title-content">Aktivitas bus</p>
  					<div class="row" style="margin-bottom:0px !important;">
  						<div class="col s6">
  							<ul>
  								<li>Sedang berjalan</li>
  							</ul>
  							<div class="bus-list">
  								<div class="bus">
  									<b>BD5</b>
  									<marquee direction="right" style="width:16px;height:16px;margin:0px 4px;">> > ></marquee>
  									<span>Monumen Tugu Pahlawan</span><br>
  									<span class="time-arrive">Perkiraan sampai: 08:00</span>
  								</div>
  								<div class="bus">
  									<b>BD3</b>
  									<marquee direction="right" style="width:16px;height:16px;margin:0px 4px;">> > ></marquee>
  									<span>Makam Sunan Ampel</span><br>
  									<span class="time-arrive">Perkiraan sampai: 09:30</span>
  								</div>
  							</div>
  						</div>
  						<div class="col s6">
  							<ul>
  								<li>Akan berangkat</li>
  							</ul>
  							<div class="bus-list">
  								<div class="bus">
  									<b>BD7</b>
  									<marquee direction="right" style="width:16px;height:16px;margin:0px 4px;">- - -</marquee>
  									<span>Museum Kesehatan</span><br>
  									<span class="time-arrive">Berangkat pada: 09:00</span>
  								</div>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  			<div class="col s4">
  				<div class="information">
  					<p class="title-content">Informasi</p>
  					<div class="row" style="margin-bottom:0px !important;">
  						<div class="col s12">
  					<?php

  						$informasi_highlight = mysqli_query($connect, "SELECT * FROM informasi ORDER BY id_informasi DESC");
						$datadata = mysqli_fetch_array($informasi_highlight);

					?>
  							<ul>
  								<li><?php echo $datadata['judul_informasi']; ?></li>
  							</ul>
  							<div class="note-list">
  								<div class="note">
  									<span style="font-size:12px;">
  										<?php echo $datadata['isi_informasi']; ?>		
  									</span>
  								</div>
  								<div class="more-note modal-trigger" data-target="modal1">
  									Selengkapnya
  								</div>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  		<div class="row">
  			<div class="col s4">
  				<div class="help">
  					<p class="title-content">Bantuan</p>	
  					<div class="desc-help">
  						<span style="font-size:14px;">Ada kendala dalam menggunakan website? Halaman FAQ dan customer service akan membantumu untuk menyelesaikan masalah!</span>
  					</div>
  					<div class="more-help">
  						<a href="bantuan.php" style="color:#333;">Selengkapnya</a>
  					</div>
  				</div>
  			</div>
  			<div class="col s5">
  				<div class="ticket">
  					<p class="title-content">Tiket yang tersedia</p>
  					<div class="row">
  						<div class="col s6">
  							<div class="ticket-available">
  								<span>Hutan Mangrove Gunu...</span>
  								<span class="detail-ticket">Senin, 20 Juni 2022 | Jam 09:00</span><br>
  								<p class="price-ticket">Rp15.000<span style="font-size:12px;margin-left:6px;font-weight:normal;">Tersedia 5 Kursi</span></p>
  							</div>
  						</div>
  						<div class="col s6">
  							<div class="ticket-available">
  								<span>Kebun Binatang Sura...</span>
  								<span class="detail-ticket">Sabtu, 18 Juni 2022 | Jam 08:00</span><br>
  								<p class="price-ticket">Rp20.000<span style="font-size:12px;margin-left:6px;font-weight:normal;">Tersedia 10 Kursi</span></p>
  							</div>
  						</div>
  					</div>	
  					<div class="more-ticket">
  						<a href="tiket.php" style="color:#333;">Selengkapnya</a>
  					</div>
  				</div>
  			</div>
  			<div class="col s3">
  				<div class="maker">
  					<p class="title-content">Dibuat oleh</p>
  					<ul>
  						<li>Ikhya Ulummuddin</li>
  						<li>Kezia</li>
  						<li>Sri Fatmawati Yunizar</li>
  					</ul>
  				</div>
  			</div>
  		</div>
  	</div>

  	<!--modal-->
  		<div id="modal1" class="modal modal-information">
    		<div class="modal-content">
      			<h4>Informasi</h4>
      		<?php
      			while($data = mysqli_fetch_array($show)){
      				echo "<h6>".$data['judul_informasi']."</h6>";
      				echo "<span class='date-information'>".$data['waktu_dibuat']."</span>";
      				echo "<p style='margin-top:8px !important'>".$data['isi_informasi']."</p>";
      			}
      		?>
    		</div>
    		<div class="modal-footer">
      			<a href="#!" class="modal-close btn-flat">Tutup</a>
    		</div>
  		</div>
  	<!--end-->

  	<div class="footer">
  		<div class="left">Dolen - Kelompok 12</div>
  		<div class="right">Pemrograman Web A081</div>
  	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
    	$('.modal').modal();
  	});
</script>
</body>
</html>