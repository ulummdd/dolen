<?php
  
  include_once("config.php");
  session_start();
  if(!isset($_SESSION['id_admin'])){
    header("Location: login.php");
  }

  $show = mysqli_query($connect, "SELECT * FROM informasi ORDER BY id_informasi DESC");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="FPpemweb2.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <title>Informasi - Admin Dolen</title>
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
            <h3><i class="fa-solid fa-info-circle mr-3"></i>Informasi</h3><hr>
            <a href="tambah-informasi.php" class="btn btn-primary mb-3"><i class="fa-solid fa-plus mr-2"></i>Buat informasi</a>
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Pembuat</th>
                  <th scope="col">Judul</th>
                  <th scope="col">Kilasan informasi</th>
                  <th scope="col">Waktu dibuat</th>
                  <th scope="col"><center>Opsi</center></th>
                </tr>
              </thead>
              <tbody>
              <?php

                function truncate($text, $chars = 20) {
                  if (strlen($text) <= $chars) {
                    return $text;
                  }

                  $text = $text." ";
                  $text = substr($text,0,$chars);
                  $text = substr($text,0,strrpos($text,' '));
                  $text = $text."...";
                  return $text;
                }

                $no = 1;
                while($data = mysqli_fetch_array($show)){
                  $isi_informasi = truncate($data['isi_informasi'], 25);
                  echo "<tr>";
                  echo "<th>".$no++."</th>";
                  echo "<td>".$data['pembuat_informasi']."</td>";
                  echo "<td>".$data['judul_informasi']."</td>";
                  echo "<td>".$isi_informasi."</td>";
                  echo "<td>".$data['waktu_dibuat']."</td>";
                  echo "<td>
                        <center>
                          <a href='detail-informasi.php?id=$data[id_informasi]'><i class='fa-solid fa-eye p-2 text-white rounded' data-toggle='tooltip' title='Detail' style='background-color:#279FA7;'></i></a>
                          <a href='edit-informasi.php?id=$data[id_informasi]'><i class='fa-solid fa-edit p-2 text-white rounded' data-toggle='tooltip' title='Edit' style='background-color:#E7D740;'></i></a>
                          <a href='hapus-informasi.php?id=$data[id_informasi]'><i class='fa-solid fa-trash bg-danger p-2 text-white rounded' data-toggle='tooltip' title='Hapus'></i>
                        </center>
                        </td>";
                  echo "</tr>";
            }
      
          ?>
              </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="FPpemweb3.js"></script>
</body>
</html>