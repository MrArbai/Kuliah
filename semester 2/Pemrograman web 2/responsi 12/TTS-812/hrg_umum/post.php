<?php

include_once("../config.php");

$kd_hrg = '';
$descr = '';
$kelas = '';
$harga = '';
$st_aktif = '';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "SELECT * FROM hrg_umum WHERE kd_hrg='$id'");

    if ($result === false) {
        $error = "Error: " . mysqli_error($mysqli);
        echo '<script>alert( ' . $error . ');</script>';
    } else {
        // Query executed successfully
        if (mysqli_num_rows($result) > 0) {
            while ($user_data = mysqli_fetch_array($result)) {
                $kd_hrg = $user_data['kd_hrg'];
                $descr = $user_data['descr'];
                $kelas = $user_data['kelas'];
                $harga = $user_data['harga'];
                $st_aktif = $user_data['st_aktif'];
            }
        } else {
            $error = "No records found.";
            echo '<script>alert(' . $error . ');</script>';
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="../assets/fontawesome-free-6.1.1/css/all.min.css" rel="stylesheet">
    <script src="../assets/js/jquery v3.6.4.min.js"></script>
    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary ">
        <a class="navbar-brand ml-5 font-weight-bold" href="#">
            <i class="fa-solid fa-house-user mr-2"></i>Home
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item ">
                    <a class="nav-link" href="../perusahaan/">Perusahaan</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../hrg_umum/">hrg_umum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../far_ord_ri/">far_ord_ri</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-xl mt-5 d-flex flex-column justify-content-center align-items-center">
        <form action="helper.php" method="POST" class="border shadow-lg p-3 mb-5 bg-white rounded " style="width: 400px;">
            <div class="form-group">
                <label for="kd_hrg">Kode</label>
                <input type="text" name="kd_hrg" value="<?= ($kd_hrg !== '') ? $kd_hrg : ''; ?>" class=" form-control" id="kd_hrg" placeholder="Kode harga">
            </div>
            <div class="form-group">
                <label for="descr">Description</label>
                <textarea type="text" name="descr" class=" form-control" id="descr" placeholder="Description"><?= ($descr !== '') ? $descr : ''; ?></textarea>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <input type="text" name="kelas" value="<?php echo ($kelas !== '') ? $kelas : ''; ?>" class="form-control" id="kelas" placeholder="kelas">
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" value="<?= ($harga !== '') ? $harga : ''; ?>" class="form-control" id="harga" placeholder="harga">
            </div>
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="st_aktif" value="0" onclick="handleCheckboxChange(1)" <?= ($st_aktif == 0) ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="inlineCheckbox1">Aktif</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="st_aktif" value="1" onclick="handleCheckboxChange(2)" <?= ($st_aktif == 1) ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="inlineCheckbox2">NonAktif</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Save</button>
        </form>
    </div>
    <footer class="d-flex flex-column justify-content-center align-items-center mt-4">
        <p class="mb-1">© <?php
                            $mydate = getdate(date("U"));
                            echo "$mydate[year]";
                            ?> Arbai</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>

    <script src="../assets/js/app.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</body>

</html>