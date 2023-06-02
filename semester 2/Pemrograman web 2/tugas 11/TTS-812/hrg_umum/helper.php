<?php
include_once("../config.php");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    delete($mysqli);
} else {
    saveData($mysqli);
}


function saveData($mysqli)
{
    if (isset($_POST['submit'])) {
        $kd_hrg = $_POST['kd_hrg'];
        $descr = $_POST['descr'];
        $kelas = $_POST['kelas'];
        $harga = $_POST['harga'];
        $st_aktif = $_POST['st_aktif'];

        if (!isexists($mysqli, $kd_hrg)) {
            $result = mysqli_query($mysqli, "INSERT INTO hrg_umum(kd_hrg, descr, kelas,harga,st_aktif)VALUES('$kd_hrg','$descr','$kelas',$harga,$st_aktif)");
        } else {
            $result = mysqli_query($mysqli, "UPDATE hrg_umum SET descr='$descr', kelas='$kelas', harga=$harga, st_aktif=$st_aktif WHERE kd_hrg='$kd_hrg'");
        }

        if ($result && mysqli_affected_rows($mysqli) > 0) {
            $message = "Data inserted/updated successfully!";
        } else {
            $error = mysqli_error($mysqli);
            $message = "Error delete data: " . $error;
        }
        header("Location: index.php?message=" . urlencode($message));
        exit();
    }
}

function delete($mysqli)
{
    $kode = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM hrg_umum WHERE kd_hrg = '$kode'");

    if ($result && mysqli_affected_rows($mysqli) > 0) {
        $message = "Data delete successfully!";
    } else {
        $error = mysqli_error($mysqli);
        $message = "Error delete data: " . $error;
    }

    header("Location: index.php?message=" . urlencode($message));
    exit();
}

function isexists($mysqli, $kd_hrg)
{
    $result = mysqli_query($mysqli, "SELECT * "
        . "FROM hrg_umum WHERE kd_hrg='$kd_hrg'");
    $number = mysqli_num_rows($result);
    if ($number > 0) {
        return true;
    } else {
        return false;
    }
}
