<?php

include_once("config.php");
$id = $_GET['id'];
$result = mysqli_query($connect, "DELETE FROM tiket WHERE id_tiket=$id");
header("Location:tiket-admin.php");

?>