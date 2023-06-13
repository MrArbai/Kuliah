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
        $no = $_POST['no'];
        $id_sroom = $_POST['id_sroom'];
        $trs_type = $_POST['trs_type'];
        $month = $_POST['month'];
        $no_sp = $_POST['no_sp'];
        $id_supp = $_POST['id_supp'];
        $part_code = $_POST['part_code'];



        if (!isexists($mysqli, $no))  {
            $result = mysqli_query(
                $mysqli,
                "INSERT INTO far_ord_ri(id_sroom, trs_type, month, no_sp, id_supp, part_code) 
                VALUES ('$id_sroom','$trs_type','$month','$no_sp','$id_supp','$part_code')"
            );
        } else {
            $result = mysqli_query($mysqli, "UPDATE far_ord_ri SET id_sroom='$id_sroom', trs_type='$trs_type', month=$month, no_sp='$no_sp', id_supp='$id_supp', part_code='$part_code' WHERE no=$no");
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
    $result = mysqli_query($mysqli, "DELETE FROM far_ord_ri WHERE no=$kode");

    if ($result && mysqli_affected_rows($mysqli) > 0) {
        $message = "Data delete successfully!";
    } else {
        $error = mysqli_error($mysqli);
        $message = "Error delete data: " . $error;
    }

    header("Location: index.php?message=" . urlencode($message));
    exit();
}

function isexists($mysqli, $kode)
{
    $result = mysqli_query($mysqli, "SELECT * "
        . "FROM far_ord_ri WHERE no=$kode");
    $number = mysqli_num_rows($result);
    if ($number > 0) {
        return true;
    } else {
        return false;
    }
}
