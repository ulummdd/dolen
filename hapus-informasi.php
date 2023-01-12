<?php

include_once("config.php");
$id = $_GET['id'];
$result = mysqli_query($connect, "DELETE FROM informasi WHERE id_informasi=$id");
header("Location:informasi.php");

?>