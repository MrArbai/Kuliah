<?php
include_once("config.php");

$kode = ($_GET['kd_hrg'] === '') ? null : $_GET['kd_hrg'];
$no = ($_GET['No'] === '') ? null : $_GET['No'];

echo $kode;
if ($kode !== null){
  $result = mysqli_query($mysqli,"DELETE FROM hrg_umum WHERE kd_hrg = '$kode'");
  header("Location:MasterShow.php");

}
if ($no !== null){
  $result = mysqli_query($mysqli,"DELETE FROM far_ord_ri WHERE no = $no"); 

  header("Location:tranksaksishow.php");
}

if ($result && mysqli_affected_rows($mysqli) > 0) {
  echo '<script>alert("Data deleted successfully!");</script>';
} else {

  $error = mysqli_error($mysqli);
  echo '<script>alert("Error deleted data: ' . $error . '");</script>';
}
