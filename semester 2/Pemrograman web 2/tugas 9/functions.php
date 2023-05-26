<?php
include_once("config.php");
$kode = $_GET['KODE'];
$result = mysqli_query($mysqli,"DELETE FROM perusahaan WHERE KODE = $kode");

  

  if ($result && mysqli_affected_rows($mysqli) > 0) {
    echo '<script>alert("Data deleted successfully!");</script>';
  } else {
    $error = mysqli_error($mysqli);
    echo '<script>alert("Error deleted data: ' . $error . '");</script>';
  }
  header("Location:index.php");




