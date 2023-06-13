<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="assets/fontawesome-free-6.1.1/css/all.min.css" rel="stylesheet">
    <script src="assets/js/jquery-v3.6.4.js"></script>
    <title>Hello, world!</title>
</head>

<body>
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-secondary">
        <a class="navbar-brand ml-5 font-weight-bold" href="#">
            <i class="fa-solid fa-house-user mr-2"></i>Home
        </a>
    </nav>
    <div class="container-fluid">
        <div class="jumbotron jumbotron-fluid">
            <div class="container d-flex flex-column justify-content-center align-items-center mt-4">
                <h1 class="display-4 ">My Project</h1>
                <p class="lead">Ini adalah landing page Home</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title bg-primary p-3 text-danger font-weight-bold">
                            <i class="fa-solid fa-browser">far_ord_ri</i>
                        </div>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="far_ord_ri/" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title bg-primary p-3 text-danger font-weight-bold">
                            <i class="fa-solid fa-browser">hrg_umum</i>
                        </div>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="hrg_umum/" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title bg-primary p-3 text-danger font-weight-bold">
                            <i class="fa-solid fa-browser">Perusahaan</i>
                        </div>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="perusahaan/" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        </div>
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


    <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</body>

</html>