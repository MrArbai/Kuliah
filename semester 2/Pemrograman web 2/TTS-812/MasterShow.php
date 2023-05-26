<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/bootstrap/css/Style.css">
    <link href="assets/fontawesome-free-6.1.1-web/css/all.min.css" rel="stylesheet">
    <script src="assets/js/jquery-v3.6.4.js"></script>
    <script src="assets/js/jquery v3.6.4.min.js"></script>
    <title>Hello, world!</title>
          <style>
.search-form {
  margin-bottom: 20px;
  margin-top: 10px;
  text-align: right;
}
    .search-form input[type="text"] {
      width: 200px;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .search-form button {
      padding: 5px 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
  </head>
  <body>
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Master</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="MasterShow.php">Item</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="transaksiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Transaksi
              </a>
              <div class="dropdown-menu" aria-labelledby="transaksiDropdown">
                <a class="dropdown-item" href="tranksaksishow.php">far_ord_ri</a>
              </div>
            </li>
    </ul>
  </div>
</nav>
   <div class="search-form">
    <form method="GET">
      <input type="text" name="search" placeholder="Deskripsi..." value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
      <button type="submit">Search</button>
    </form>
  </div>
  <table>
    <thead>
      <tr>
        <th>Kode</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Harga</th>
        <th>Status Aktif</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
      include_once("config.php");
      $search = isset($_GET['search']) ? $_GET['search'] : '';
      $qond = ($search === '') ? '' : "WHERE descr LIKE '%$search%'" ;
      $query = "SELECT * FROM hrg_umum " . $qond . " ORDER BY descr ASC";
      $result = mysqli_query($mysqli, $query);

      $results_per_page = 3;
      $number_of_result = mysqli_num_rows($result);

      $number_of_page = ceil($number_of_result / $results_per_page);

      $page = isset($_GET['page']) ? $_GET['page'] : 1;

      $page_first_result = ($page - 1) * $results_per_page;

      $ambildata_perhalaman = mysqli_query($mysqli,"SELECT * "
      . "FROM hrg_umum "
      . $qond
      . "ORDER BY descr LIMIT " . $page_first_result . ',' . $results_per_page);
      while($user_data = mysqli_fetch_array($ambildata_perhalaman)) {
        echo "<tr>";
        echo "<td>".$user_data[kd_hrg]."</td>";
        echo "<td>".$user_data[descr]."</td>";
        echo "<td>".$user_data[kelas]."</td>";
        echo "<td>".$user_data[harga]."</td>";
        echo "<td>".$user_data[st_aktif]."</td>";
        echo "<td><button><a href='masterforminput.php?kd_hrg=$user_data[kd_hrg]'> Edit </a></button>
          <button><a href='function.php?kd_hrg=$user_data[kd_hrg]'> Hapus </a></button></td></tr>";
        
      }
	?>
    </tbody>
  </table>
  <?php

//display the link of the pages in URL

for ($page = 1; $page <= $number_of_page; $page++) {
echo '<a href = "MasterShow.php?page=' . $page . '">'. $page .' </a>';

}

?>
   <div class="add-button">
        <button><a href='masterforminput.php'> Add </a></button>
      </div>
    </div>
    <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© <?php
$mydate=getdate(date("U"));
echo "$mydate[year]";
?> Arbai</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>
