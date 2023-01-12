<?php
	
	include_once("config.php");
	session_start();
	if(!isset($_SESSION['id_admin'])){
		header("Location: login.php");
	}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="FPpemweb2.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <title>Dashboard - Admin Dolen</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-stop" style="padding:10px 16px !important">
    <?php
  		$user = mysqli_query($connect, "SELECT * FROM admin WHERE id_admin = '$_SESSION[id_admin]'");
		$run = mysqli_fetch_array($user);
  	?>
        <a class="navbar-brand" href="dashboard-admin.php"><b>Selamat Datang, <?php echo $run['nama']; ?></b></a>
          <div class="form-inline my-2 my-lg-0 ml-auto"></div>
          <div class="icon ml-4" style="margin-top:5px;">
              <h5>
              	<a href="logout.php" style="color:#333;margin-right:10px;">
                	<i class="fa-solid fa-right-from-bracket mr-3" data-toggle="tooltip" title="Sign Out"></i>
                	<span style="margin-left:-10px !important;font-size:18px;">Keluar</span>
                </a>
              </h5>
          </div>
        </div>
    </nav>
    <div class="row no-gutters">
        <div class="col-md-2 bg-dark pr-3 pt-4" style="padding-bottom:198px !important;">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                  <a class="nav-link active text-white" href="dashboard-admin.php"><i class="fa-solid fa-gauge mr-3"></i>Dashboard</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="tiket-admin.php"><i class="fa-solid fa-ticket mr-3"></i>Tiket</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="pesan.php"><i class="fa-solid fa-envelope mr-3"></i>Pesan</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="informasi.php"><i class="fa-solid fa-circle-info mr-3"></i>Informasi</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="aktivitas.php"><i class="fa-solid fa-bus mr-3"></i>Aktivitas</a><hr class="bg-secondary">
                </li>
              </ul>
        </div>
        <div class="col-md-10 p-5 pt-2">
            <h3><i class="fa-solid fa-gauge mr-3"></i>Dashboard</h3><hr>
            <div class="row text-white">
                <div class="card bg-info ml-3" style="width: 18rem;">
                      <div class="card-body">
                          <div class="card-body-icon">
                            <i class="fa-solid fa-location-dot mr-3"></i>
                          </div>
                      <h5 class="card-title">Tempat Wisata</h5>
                      <div class="display-4">12</div>
                    </div>
                </div>
                <div class="card bg-success ml-5" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa-solid fa-ticket mr-3"></i>
                        </div>
                    <h5 class="card-title">Tiket</h5>
                    <div class="display-4">
                    <?php
                        $jumlah_tiket = mysqli_query($connect, "SELECT count(*) AS jumlahtiket FROM tiket");
                        $hasil_tiket = mysqli_fetch_array($jumlah_tiket);
                        echo "{$hasil_tiket['jumlahtiket']}";
                    ?>
                    </div>
                    <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
                  </div>
              </div>
              <div class="card bg-danger ml-5" style="width: 18rem;">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa-solid fa-envelope mr-3"></i>
                    </div>
                <h5 class="card-title">Pesan yang diterima</h5>
                <div class="display-4">
                <?php
                    $jumlah_pesan = mysqli_query($connect, "SELECT count(*) AS jumlahpesan FROM pesan");
                    $hasil_pesan = mysqli_fetch_array($jumlah_pesan);
                    echo "{$hasil_pesan['jumlahpesan']}";
                ?>
                </div>
                <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
              </div>
          </div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="FPpemweb3.js"></script>
</body>
</html>