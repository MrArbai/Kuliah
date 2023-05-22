<?php

include_once("config.php");

$result = mysqli_query($mysqli, " SELECT * FROM perusahaan ORDER BY KODE ASC ");
?>
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
    body {
      font-family: Arial, sans-serif;
    }

    .dashboard {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
      background-color: #f2f2f2;
    }

    .widget {
      width: 300px;
      height: 200px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin-right: 20px;
      opacity: 0; /* Initially hidden */
      animation: fade-in 1s ease-in forwards; /* Fade-in animation */
    }

    .widget-title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    svg {
      width: 100%;
      height: 100%;
    }

    @keyframes fade-in {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 100;
      }
    }
  </style>
  </head>
  <body>
  <div class="container">
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