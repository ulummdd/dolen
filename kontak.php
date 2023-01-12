<?php

	include_once("config.php");
	date_default_timezone_set("Asia/Jakarta");

	if(isset($_POST['submit'])){
		$pengirim = $_POST['nama'];
		$no_telp = $_POST['no_telp'];
		$email = $_POST['email'];
		$pesan = $_POST['pesan'];
		$waktu_dikirim = date('l, M Y - H:i');

		$result = mysqli_query($connect, "INSERT INTO pesan(pengirim, no_telp, email, pesan, waktu_dikirim) VALUES ('$pengirim', '$no_telp', '$email', '$pesan', '$waktu_dikirim')");
		if($result){
			header("Location: kontak.php");
		}
	}

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
	<title>Kontak - Dolen</title>
</head>
<body>

	<nav>
    	<div class="nav-wrapper">
    		<div class="container" style="width:90% !important;">
      			<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      			<ul class="left hide-on-med-and-down">
        			<li><a href="index.php">Beranda</a></li>
        			<li><a href="bantuan.php">Bantuan</a></li>
        			<li><a href="kontak.php" style="opacity:100%;">Kontak</a></li>
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

  	<div class="content container contact" style="width:87% !important;">
  		<div class="row">
  			<div class="col s6" style="margin-top:16px;">
  				<h1>Kontak</h1>
  				<h5>Punya pertanyaan?</h5>
  				<h5>Kirim pesan untuk kita!</h5>
  				<div class="list-contact">
  					<table border="0">
  						<tr class="info-contact">
  							<td><i class="material-icons">local_phone</i></td>
  							<td>+62 8123 4567 8900</td>
  						</tr>
  						<tr class="info-contact">
  							<td><i class="material-icons">email</i></td>
  							<td>cs@dolen.com</td>
  						</tr>
  						<tr class="info-contact">
  							<td><i class="material-icons">place</i></td>
  							<td>Jalan Dolen Terus No.6-9, Surabaya, 64200</td>
  						</tr>	
  					</table>
  				</div>
  			</div>
  			<form action="" method="post">
  			<div class="col s6">
  				<div class="row">
  					<div class="form-contact">
  						<div class="input-field col s12">
          					<input id="nama" name="nama" type="text" autocomplete="off" class="validate">
          					<label for="nama">Nama depan</label>
        				</div>
        				<div class="input-field col s6">
          					<input id="email" name="email" type="email" autocomplete="off" class="validate">
          					<label for="email">Email</label>
          				</div>
          				<div class="input-field col s6">
          					<span class="prefix nemdua">+62</span>
          					<input id="no_telp" name="no_telp" type="text" onkeypress='validate(event)' autocomplete="off" class="validate">
          					<label for="no_telp">Nomor telepon</label>
          				</div>
          				<div class="input-field col s12">
            				<textarea id="pesan" name="pesan" class="materialize-textarea" data-length="120"></textarea>
            				<label for="pesan">Pesan</label>
          				</div>
          				<div class="col s12 right-align">
          					<input class="btn btn-send" type="submit" name="submit" value="Kirim">
          				</div>
        			</div>
        		</div>
  			</div>
  			</form>
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
    	$('textarea#pesan').characterCounter();
  	});

  	function validate(evt) {
  		var theEvent = evt || window.event;
  		if (theEvent.type === 'paste') {
      		key = event.clipboardData.getData('text/plain');
  		}else{
      		var key = theEvent.keyCode || theEvent.which;
      		key = String.fromCharCode(key);
  		}
  		var regex = /[0-9]|\./;
  		if( !regex.test(key) ) {
    		theEvent.returnValue = false;
    		if(theEvent.preventDefault) theEvent.preventDefault();
  		}
	}
</script>
</body>
</html>