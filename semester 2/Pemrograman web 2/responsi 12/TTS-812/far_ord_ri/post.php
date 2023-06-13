<?php

include_once("../config.php");

$no = '';
$id_sroom = '';
$trs_type = '';
$month = '';
$no_sp = '';
$id_supp = '';
$part_code = '';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "SELECT * FROM far_ord_ri WHERE no=$id");
    while ($user_data = mysqli_fetch_array($result)) {
        $no = $user_data['no'];
        $id_sroom = $user_data['id_sroom'];
        $trs_type = $user_data['trs_type'];
        $month = $user_data['month'];
        $no_sp = $user_data['no_sp'];
        $id_supp = $user_data['id_supp'];
        $part_code = $user_data['part_code'];
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
                <li class="nav-item active">
                    <a class="nav-link" href="../perusahaan/">Perusahaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../hrg_umum/">hrg_umum</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../far_ord_ri/">far_ord_ri</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-xl mt-5 d-flex flex-column justify-content-center align-items-center">
        <form action="helper.php" method="POST" class="border shadow-lg p-3 mb-5 bg-white rounded " style="width: 400px;">
            <div class="form-group">
                <input type="hidden" name="no" value="<?= ($no !== '') ? $no : ''; ?>" class=" form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-group">
                <label for="id_sroom">id_sroom</label>
                <input type="text" name="id_sroom" value="<?= ($id_sroom !== '') ? $id_sroom : ''; ?>" class=" form-control" id="id_sroom" placeholder="id_sroom">
            </div>
            <div class="form-group">
                <label for="trs_type">trs_type</label>
                <input type="text" name="trs_type" value="<?= ($trs_type !== '') ? $trs_type : ''; ?>" class=" form-control" id="trs_type" placeholder="trs_type">
            </div>
            <div class="form-group">
                <label for="month">month</label>
                <input type="text" name="month" value="<?= ($month !== '') ? $month : ''; ?>" class=" form-control" id="month" placeholder="month">
            </div>
            <div class="form-group">
                <label for="no_sp">Email</label>
                <input type="text" name="no_sp" value="<?= ($no_sp !== '') ? $no_sp : ''; ?>" class="form-control" id="no_sp" placeholder="no_sp">
            </div>
            <div class="form-group">
                <label for="id_supp">id_supp</label>
                <input type="text" name="id_supp" value="<?= ($id_supp !== '') ? $id_supp : ''; ?>" class="form-control" id="id_supp" placeholder="id_supp">
            </div>
            <div class="form-group">
                <label for="part_code">part_code</label>
                <input type="text" name="part_code" value="<?= ($part_code !== '') ? $part_code : ''; ?>" class="form-control" id="part_code" placeholder="part_code">
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


    <script src="../assets/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</body>

</html>