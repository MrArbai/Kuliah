<?php
include_once("../config.php");

// if ($_SERVER['REQUEST_METHOD'] === 'GET') {
//     delete($mysqli);
// }else{
//     saveData($mysqli);
// }


function saveData($mysqli)
{
    if (isset($_POST['submit'])) {
        $KODE = $_POST['kode_perusahaan'];
        $NAMA_PRSH = $_POST['name_perusahaan'];
        $ALAMAT = $_POST['alamat'];
        $TLP = $_POST['nohp'];
        $EMAIL = $_POST['email'];


        if ($KODE === '') {
            $result = mysqli_query($mysqli, "INSERT INTO perusahaan(NAMA_PRSH, EMAIL, TLP,ALAMAT)VALUES('$NAMA_PRSH','$EMAIL','$TLP','$ALAMAT')");
        } else {
            $result = mysqli_query($mysqli, "UPDATE perusahaan SET NAMA_PRSH='$NAMA_PRSH', ALAMAT='$ALAMAT', TLP='$TLP', EMAIL='$EMAIL' WHERE KODE=$KODE");
        }
        
        if ($result && mysqli_affected_rows($mysqli) > 0) {
            $message = "Data inserted/updated successfully!" ;
        } else {
            $error = mysqli_error($mysqli);
            $message = "Error delete data: " . $error;
        }
        header("Location: index.php?message=" . urlencode($message));
        exit();

    }
}

function delete($mysqli){
    $kode = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM perusahaan WHERE KODE = $kode");
    if ($result && mysqli_affected_rows($mysqli) > 0) {
        $message = "Data delete successfully!";
    } else {
        $error = mysqli_error($mysqli);
        $message = "Error delete data: " . $error;
    }

    header("Location: index.php?message=" . urlencode($message));
    exit();
}

function ShowData()
{
    if (isset($_POST['submit'])) 
    {
        $NAMA_PRSH = $_POST['name_perusahaan'];
        $ALAMAT = $_POST['alamat'];
        $TLP = $_POST['nohp'];
        $EMAIL = $_POST['email'];
    }
    if (!$NAMA_PRSH === '')
    {
        $sql = SetConditionAND($sql,"NAMA_PRSH LIKE '% $NAMA_PRSH %'");
    }
    if (!$ALAMAT === '')
    {
        $sql = SetConditionAND($sql,"ALAMAT LIKE '% $ALAMAT %'");
    }
    if (!$TLP === '')
    {
        $sql = SetConditionAND($sql,"TLP LIKE '% $TLP %'");
    }
    if (!$EMAIL === '')
    {
        $sql = SetConditionAND($sql,"EMAIL LIKE '% $EMAIL %'");
    }

    $sql = ($sql !== '' ) ? '' : "WHERE " . $sql ;
    $query = "SELECT * FROM perusahaan " . $sql . " ORDER BY NAMA_PRSH ASC";

    $result = mysqli_query($mysqli, $query);


    echo $query;
    var_dump($result);
    return $result;
}

function SetConditionAND($OldCond, $NewCond) {
    return $OldCond != "" ? $OldCond . " AND (" . $NewCond . ")" : "(" . $NewCond . ")";
}

function ShowDataPerPage($page_first_result,$results_per_page)
{
    if (isset($_POST['submit'])) 
    {
        $NAMA_PRSH = $_POST['name_perusahaan'];
        $ALAMAT = $_POST['alamat'];
        $TLP = $_POST['nohp'];
        $EMAIL = $_POST['email'];
    }
    if (!$NAMA_PRSH === '')
    {
        $sql = SetConditionAND($sql,"NAMA_PRSH LIKE '% $NAMA_PRSH %'");
    }
    if (!$ALAMAT === '')
    {
        $sql = SetConditionAND($sql,"ALAMAT LIKE '% $ALAMAT %'");
    }
    if (!$TLP === '')
    {
        $sql = SetConditionAND($sql,"TLP LIKE '% $TLP %'");
    }
    if (!$EMAIL === '')
    {
        $sql = SetConditionAND($sql,"EMAIL LIKE '% $EMAIL %'");
    }

    $result = mysqli_query($mysqli, "SELECT * FROM perusahaan " . ($sql === "" ? "" : "WHERE " . $sql)
                        . "ORDER BY KODE LIMIT " . $page_first_result . ',' . $results_per_page);
    return $result;
}
