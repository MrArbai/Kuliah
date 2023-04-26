<?php
include_once("config.php");

$kode = $_GET['KODE'];

$result = mysqli_query($mysqli,"DELETE FROM perusahaan WHERE KODE = $kode");

header("Location:index.php");