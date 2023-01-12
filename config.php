<?php 
 
$server = "localhost";
$user = "root";
$pass = "";
$database = "dolen";
 
$connect = mysqli_connect($server, $user, $pass, $database);
 
if(!$connect){
    die("<script>alert('Ada kesalahan')</script>");
}
 
?>