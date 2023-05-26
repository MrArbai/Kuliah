
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
    <title>Hello, world!</title>
    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
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
    <div class="fContainer">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Master</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="MasterShow.php">Perusahaan</a>
                  </li>
          </ul>
        </div>
      </nav>
      <div class="dashboard">
          <div class="widget">
            <h2 class="widget-title">Widget 1</h2>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
              <circle cx="50" cy="50" r="40" fill="#4CAF50"/>
            </svg>
          </div>
          <div class="widget">
            <h2 class="widget-title">Widget 2</h2>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
              <rect x="10" y="10" width="80" height="80" fill="#2196F3"/>
            </svg>
          </div>
          <div class="widget">
            <h2 class="widget-title">Widget 3</h2>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
              <polygon points="50 10 90 90 10 90" fill="#FFC107"/>
            </svg>
          </div>
      </div>
      <main>
      <div class="search-form">
        <form method="GET">
          <input type="text" name="search" placeholder="Deskripsi..." value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
          <button type="submit">Search</button>
        </form>
      </div>
      <table id="customers">
      <tr>
        <th> Perusahaan </th> 
        <th> Alamat </th> 
        <th> Telephone </th> 
        <th> Email </th>
        <th></th>
      </tr>
      <?php
      include_once("config.php");
      $search = isset($_GET['search']) ? $_GET['search'] : '';
      $qond = ($search === '') ? '' : "WHERE descr LIKE '%$search%'" ;
      $query = "SELECT * FROM perusahaan " . $qond . " ORDER BY KODE ASC";
      $result = mysqli_query($mysqli, $query);

      $results_per_page = 3;
      $number_of_result = mysqli_num_rows($result);

      $number_of_page = ceil($number_of_result / $results_per_page);

      $page = isset($_GET['page']) ? $_GET['page'] : 1;

      $page_first_result = ($page - 1) * $results_per_page;

      $ambildata_perhalaman = mysqli_query($mysqli,"SELECT * "
      . "FROM perusahaan "
      . $qond
      . "ORDER BY KODE LIMIT " . $page_first_result . ',' . $results_per_page);

      while($user_data = mysqli_fetch_array($ambildata_perhalaman)) {
        echo "<tr>";
        echo "<td>".$user_data[NAMA_PRSH]."</td>";
        echo "<td>".$user_data[ALAMAT]."</td>";
        echo "<td>".$user_data[TLP]."</td>";
        echo "<td>".$user_data[EMAIL]."</td>";
        echo "<td><a href='masterforminput.php?KODE=$user_data[KODE]'> Edit </a> |";
        echo "<a href='functions.php?KODE=$user_data[KODE]'> Hapus </a></td></tr>";       
      }
	?>
  </table>
  <?php

//display the link of the pages in URL

for ($page = 1; $page <= $number_of_page; $page++) {
echo '<a href = "index.php?page=' . $page . '">'. $page .' </a>';

}

?>
   <div class="add-button">
        <button><a href='masterforminput.php'> Add </a></button>
      </div>
      </main>
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