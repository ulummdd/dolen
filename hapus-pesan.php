<?php

include_once("config.php");
$id = $_GET['id'];
$result = mysqli_query($connect, "DELETE FROM pesan WHERE id_pesan=$id");
header("Location:pesan.php");

?>