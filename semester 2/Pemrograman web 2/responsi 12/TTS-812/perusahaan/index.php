<?php
if (isset($_GET['message'])) {
    $message = $_GET['message'];
    echo "<script>alert('$message');</script>";
}

  include_once("../config.php");
                    $sql = "";
                    if (isset($_POST['submit'])) 
                    {
                        $NAMA_PRSH = $_POST['name_perusahaan'];
                        $ALAMAT = $_POST['alamat'];
                        $TLP = $_POST['nohp'];
                        $EMAIL = $_POST['email'];

                        if ($NAMA_PRSH !== '')
                        {
                            $sql = SetConditionAND($sql,"NAMA_PRSH LIKE '%$NAMA_PRSH%'");
                        }
                        if ($ALAMAT !== '')
                        {
                            $sql = SetConditionAND($sql,"ALAMAT LIKE '%$ALAMAT%'");
                        }
                        if ($TLP !== '')
                        {
                            $sql = SetConditionAND($sql,"TLP LIKE '%$TLP%'");
                        }
                        if ($EMAIL !== '')
                        {
                            $sql = SetConditionAND($sql,"EMAIL LIKE '%$EMAIL%'");
                        }
                    }
                    

                    $sql = ($sql === '' ) ? '' : "WHERE " . $sql ;

                    $query = "SELECT * FROM perusahaan " . $sql . " ORDER BY NAMA_PRSH ASC";
                    $result = mysqli_query($mysqli, $query);

                    $results_per_page = 3;
                    $number_of_result = mysqli_num_rows($result);

                    $number_of_page = ceil($number_of_result / $results_per_page);

                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $previous = ($page > 1) ? $page - 1 : $page;
                    $next = ($page < $number_of_page) ? $page + 1 : $page;
                    $page_first_result = ($page - 1) * $results_per_page;

                    $myquery = "SELECT * "
                        . "FROM perusahaan "
                        . $sql
                        . "ORDER BY KODE LIMIT " . $page_first_result . ',' . $results_per_page;

                    $ambildata_perhalaman = mysqli_query($mysqli, $myquery);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="../assets/fontawesome-free-6.1.1/css/all.min.css" rel="stylesheet">
    <script src="../assets/js/jquery v3.6.4.min.js"></script>
    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary ">
        <a class="navbar-brand ml-5 font-weight-bold" href="../index.php">
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
            <!-- <form class="form-inline mr-5 my-lg-0 " action="index.php" method="POST">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
    </nav>
    <div class="container-fluid">
        <div class="jumbotron jumbotron-fluid">
            <div class="container d-flex flex-column justify-content-center align-items-center mt-4">
                <h1 class="display-4 ">my project</h1>
                <p class="lead">show data table perusahaan</p>
            </div>
        </div>
         <div class="search-form mb-3">
           <form class="form-inline" action="index.php" method="POST">
              <!-- Search Form 1 -->
              <div class="form-group mb-2">
                <input type="text" name="name_perusahaan" value = "<?= ($NAMA_PRSH !== '') ? $NAMA_PRSH : ''; ?>"  class="form-control" placeholder="Company Name">
              </div>
              <div class="form-group mx-sm-3 mb-2">
                <input type="text" name="alamat" value = "<?= ($ALAMAT !== '') ? $ALAMAT : ''; ?>"class="form-control" placeholder="Address">
              </div>
              <div class="form-group mx-sm-3 mb-2">
                <input type="tel" name="nohp" value = "<?= ($TLP !== '') ? $TLP : ''; ?>"class="form-control" placeholder="Phone">
              </div>
              <div class="form-group mx-sm-3 mb-2">
                <input type="email" name="email" value = "<?= ($EMAIL !== '') ? $EMAIL : ''; ?>"class="form-control" placeholder="Email">
              </div>
              <button type="submit" name = "submit" class="btn btn-primary mb-2">Search</button>
            </form>
        </div>
        <div id="overflowTest">
            <table class="table">
                <thead class="bg-success">
                    <tr>
                        <th> Perusahaan </th>
                        <th> Alamat </th>
                        <th> Telephone </th>
                        <th> Email </th>
                        <th> action </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($user_data = mysqli_fetch_array($ambildata_perhalaman)) {
                        echo "<tr>";
                        echo "<td>" . $user_data['NAMA_PRSH'] . "</td>";
                        echo "<td>" . $user_data['ALAMAT'] . "</td>";
                        echo "<td>" . $user_data['TLP'] . "</td>";
                        echo "<td>" . $user_data['EMAIL'] . "</td>";
                        echo "<td><a class='btn btn-outline-success my-2 my-sm-0' href='Post.php?id=$user_data[KODE]'>Edit</a>";
                        echo "<a class='btn btn-outline-success my-2 my-sm-0' href='helper.php?id=$user_data[KODE]'>Hapus</a></td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href=<?= "?page=$previous" ?>>
                    < </a>
            </li>
            <?php
            for ($page = 1; $page <= $number_of_page; $page++) {
                echo '<a class="page-link" href = "index.php?page=' . $page . '">' . $page . '</a>';
            }
            ?>
            <li class="page-item mr-2">
                <a class="page-link" href=<?= "?page=$next" ?>>></a>
            </li>
            <a class="btn btn-outline-success my-2 my-sm-0" href="#" onclick="submitForm('Post.php')">Tambah</a>
        </ul>
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