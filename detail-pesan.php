<?php
  
  include_once("config.php");
  session_start();
  if(!isset($_SESSION['id_admin'])){
    header("Location: login.php");
  }

  $id = $_GET['id'];
  $show = mysqli_query($connect, "SELECT * FROM pesan WHERE id_pesan=$id");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="FPpemweb2.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <title>Detail Pesan - Admin Dolen</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-stop" style="padding:10px 16px !important">
    <?php
      $user = mysqli_query($connect, "SELECT * FROM admin WHERE id_admin = '$_SESSION[id_admin]'");
      $run = mysqli_fetch_array($user);
    ?>
        <a class="navbar-brand" href="dashboard-admin.php"><b>Selamat Datang, <?php echo $run['nama']; ?></b></a>
          <form class="form-inline my-2 my-lg-0 ml-auto"></form>
          <div class="icon ml-4">
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
          <?php 
            while($data = mysqli_fetch_array($show)){
          ?>
            <h3><i class="fa-solid fa-info-circle mr-3"></i>Detail pesan</h3><hr>
            <div class="mb-3">
              <label for="pengirim" class="form-label">Pengirim</label>
              <input type="text" name="pengirim" class="form-control" id="pengirim" value="<?php echo $data['pengirim']; ?>" disabled>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="email" value="<?php echo $data['email']; ?>" disabled>
            </div>
            <div class="mb-3">
              <label for="no_telp" class="form-label">Nomor telepon</label>
              <input type="text" name="no_telp" class="form-control" id="no_telp" value="+62<?php echo $data['no_telp']; ?>" disabled>
            </div>
            <div class="mb-3">
              <label for="waktu_dikirim" class="form-label">Pesan dikirim</label>
              <input type="text" name="waktu_dikirim" class="form-control" id="waktu_dikirim" value="<?php echo $data['waktu_dikirim']; ?>" disabled>
            </div>
            <div class="mb-3">
              <label for="pesan" class="form-label">Isi pesan</label>
              <textarea class="form-control" name="pesan" id="pesan" rows="3" disabled><?php echo $data['pesan']; ?></textarea>
            </div>
          <?php
            echo "<a href='hapus-pesan.php?id=$data[id_pesan]' class='btn text-white bg-danger mb-3'>Hapus pesan</a>";
            }
          ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="FPpemweb3.js"></script>
</body>
</html>