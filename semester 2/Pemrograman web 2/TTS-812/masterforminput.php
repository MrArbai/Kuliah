<?php

include_once("config.php");

$id = $_GET['kd_hrg'];


$result = mysqli_query($mysqli, "SELECT * FROM hrg_umum WHERE kd_hrg='$id'");
while($user_data = mysqli_fetch_array($result))
{
    $kd_hrg = $user_data['kd_hrg'];
    $descr = $user_data['descr'];
    $kelas = $user_data['kelas'];
    $harga = $user_data['harga'];
    $st_aktif = $user_data['st_aktif'];
                
}

if(isset($_POST['Submit'])) {
    $kd_hrg = $_POST['kd_hrg'];
    $descr = $_POST['descr'];
    $kelas = $_POST['kelas'];
    $harga = $_POST['harga'];
    $st_aktif = $_POST['st_aktif'];

    if($st_aktif === "Aktif"){
      $status = 0;
    } else{
      $status = 1;
    }
    $id = $_GET['kd_hrg'];
    if ($kd_hrg !== $id){
      $result = mysqli_query($mysqli, "INSERT INTO hrg_umum(kd_hrg, descr, kelas,harga,st_aktif)VALUES('$kd_hrg','$descr','$kelas',$harga,$status)");
    } else {
      $result = mysqli_query($mysqli, "UPDATE hrg_umum SET descr='$descr', kelas='$kelas', harga=$harga, st_aktif=$status WHERE kd_hrg='$kd_hrg'");
    }
   
if ($result && mysqli_affected_rows($mysqli) > 0) {
  echo '<script>alert("Data inserted successfully!");</script>';
} else {

  $error = mysqli_error($mysqli);
  echo '<script>alert("Error inserting data: ' . $error . '");</script>';
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/bootstrap/css/Style.css">
    <link href="assets/fontawesome-free-6.1.1-web/css/all.min.css" rel="stylesheet">
    <script src="assets/js/jquery-v3.6.4.js"></script>
    <script src="assets/js/jquery v3.6.4.min.js"></script>
    <title>Master Harga</title>
    <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      padding: 20px;
    }

    .container-md {
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }

    .container-md h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 10px;
      border-radius: 4px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    .form-group textarea {
      height: 120px;
    }

    .form-group input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      cursor: pointer;
    }

    .form-group input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
  </head>
  <body>
    <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="index.phpnavbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
</div>
<div class="container-md">
    <h2>Master Harga</h2>
    <form action="masterforminput.php" method="post">
      <div class="form-group">
        <label for="kd_hrg">Kode Harga:</label>
        <input type="text" id="kd_hrg" name="kd_hrg" value="<?php echo ($kd_hrg !== '') ? $id : ''; ?>" required>
      </div>
      <div class="form-group">
        <label for="descr">Deskripsi:</label>
        <textarea id="descr" name="descr" required><?php echo ($descr !== '') ? $descr : ''; ?></textarea>
      </div>
      <div class="form-group">
        <label for="kelas">Kelas:</label>
        <input type="text" id="kelas" name="kelas" value="<?php echo ($kelas !== '') ? $kelas : ''; ?>" required>
      </div>
      <div class="form-group">
        <label for="harga">Harga:</label>
        <input type="text" id="harga" name="harga" value="<?php echo ($harga !== '') ? $harga : ''; ?>" required>
      </div>
      <div class="form-group">
        <label for="st_aktif">Status Aktif:</label>
        <select id="st_aktif" name="st_aktif" required>
          <option value="Aktif" <?php echo ($st_aktif !== 1) ?  : 'selected'; ?>>Aktif</option> 
          <option value="Tidak Aktif" <?php echo ($st_aktif !== 0) ?  : 'selected' ; ?>>Tidak Aktif</option>
          
        </select>
      </div>
      <div class="form-group">
        <input type="submit" name="Submit" value="Kirim">
      </div>
    </form>
  </div>
    <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© <?php
$mydate=getdate(date("U"));
echo "$mydate[year]";
echo $st_aktif;
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

