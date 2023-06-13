<?php

include_once("../config.php");

$KODE = '';
$NAMA_PRSH = '';
$ALAMAT = '';
$TLP = '';
$EMAIL = '';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "SELECT * FROM perusahaan WHERE KODE=$id");

    if ($result === false) {
        $error = "Error: " . mysqli_error($mysqli);
        echo '<script>alert( ' . $error . ');</script>';
    } else {
        // Query executed successfully
        if (mysqli_num_rows($result) > 0) {
            while ($user_data = mysqli_fetch_array($result)) {
                $KODE = $user_data['KODE'];
                $NAMA_PRSH = $user_data['NAMA_PRSH'];
                $ALAMAT = $user_data['ALAMAT'];
                $TLP = $user_data['TLP'];
                $EMAIL = $user_data['EMAIL'];
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
                <li class="nav-item active">
                    <a class="nav-link" href="../perusahaan/">Perusahaan</a>
                </li>
                <li class="nav-item">
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
                <input type="hidden" name="kode_perusahaan" value="<?= ($KODE !== '') ? $KODE : ''; ?>" class=" form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Nama Perusahaan</label>
                <input type="text" name="name_perusahaan" value="<?= ($NAMA_PRSH !== '') ? $NAMA_PRSH : ''; ?>" class=" form-control" id="inputAddress2" placeholder="Nama Perusahaan">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Alamat</label>
                <textarea type="text" name="alamat" class="form-control" id="inputAddress2" placeholder="Alamat"><?php echo ($ALAMAT !== '') ? $ALAMAT : ''; ?></textarea>
            </div>
            <div class="form-group">
                <label for="inputAddress2">Email</label>
                <input type="text" name="email" value="<?= ($EMAIL !== '') ? $EMAIL : ''; ?>" class="form-control" id="inputAddress2" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Telephon</label>
                <input type="text" name="nohp" value="<?= ($TLP !== '') ? $TLP : ''; ?>" class="form-control" id="inputAddress2" placeholder="Telepon">
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