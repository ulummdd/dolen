<?php

	include 'config.php';
	error_reporting(0);
	session_start();

	if(isset($_SESSION['email'])){
		header("Location: dashboard-admin.php");
	}

	if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$result = mysqli_query($connect, $sql);
		if($result->num_rows > 0){
			$row = mysqli_fetch_assoc($result);
			$_SESSION['id_admin'] = $row['id_admin'];
			header("Location: dashboard-admin.php");
		}else{
			echo "<script>alert('Email atau kata sandi anda salah, coba lagi')</script>";
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
	<title>Login -  Dolen</title>
</head>
<body>

	<nav>
    	<div class="nav-wrapper">
    		<div class="container" style="width:90% !important;">
      			<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      			<a href="#" class="brand-logo center"><i style="font-size:26px;text-transform:capitalize;">Dolen</i></a>
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
  		<form action="" method="post">
  		<div class="row">
  			<center>
  			<div class="col s12">
  				<div class="title-help">
  					<h4>Login</h4>
  					<p style="margin-bottom:6px !important">Masukkan informasi yang diperlukan</p>
  				</div>
  			</div>
  			<div class="col s12 form-login">
  				<div class="input-field align-center" style="width:400px;margin-top:40px;">
          			<input id="username" type="text" name="username" class="validate" required>
          			<label for="username">Username</label>
        		</div>
        		<div class="input-field align-center" style="width:400px;margin-top:30px;">
          			<input id="password" type="password" name="password" class="validate" style="width:90%;margin-left:-40px;" required>
          			<label for="password">Kata sandi</label>
          			<span class="prefix mata" onclick="showhide()"><i class="material-icons">remove_red_eye</i></span>
        		</div>
        		<input type="submit" class="btn-login" name="submit" value="Masuk">
  			</div>
  			</center>
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

  	function showhide() {
  		var x = document.getElementById("password");
  		if (x.type === "password") {
    		x.type = "text";
  		}else{
    		x.type = "password";
  		}
	}
</script>
</body>
</html>