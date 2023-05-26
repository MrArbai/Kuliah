<?php

include_once("config.php");

$id = $_GET['No'];


$result = mysqli_query($mysqli, "SELECT * FROM far_ord_ri WHERE no=$id");
while($user_data = mysqli_fetch_array($result))
{
    $no = $user_data['no'];
    $id_sroom = $user_data['id_sroom'];
    $trs_type = $user_data['trs_type'];
    $month = $user_data['month'];
    $no_sp = $user_data['no_sp'];
    $id_supp = $user_data['id_supp'];
    $part_code = $user_data['part_code'];
                
}

if(isset($_POST['Submit'])) {
    $no = $_POST['no'];
    $id_sroom = $_POST['id_sroom'];
    $trs_type = $_POST['trs_type'];
    $month = $_POST['month'];
    $no_sp = $_POST['no_sp'];
    $id_supp = $_POST['id_supp'];
    $part_code = $_POST['part_code'];



    if ($no === ''){
      $result = mysqli_query($mysqli, 
      "INSERT INTO far_ord_ri(id_sroom, trs_type, month, no_sp, id_supp, part_code) 
      VALUES ('$id_sroom','$trs_type','$month','$no_sp','$id_supp','$part_code')");

      if ($result && mysqli_affected_rows($mysqli) > 0) {
      echo '<script>alert("Data inserted successfully!");</script>';
    } else {
      $error = mysqli_error($mysqli);
      echo '<script>alert("Error inserting data: ' . $error . '");</script>';
    }
    } else {
      $result = mysqli_query($mysqli, "UPDATE far_ord_ri SET id_sroom='$id_sroom', trs_type='$trs_type', month=$month, no_sp='$no_sp', id_supp='$id_supp', part_code='$part_code' WHERE no=$no");


    }
    // if ($result && mysqli_affected_rows($mysqli) > 0) {
    //   echo '<script>alert("Data inserted successfully!");</script>';
    // } else {
    //   $error = mysqli_error($mysqli);
    //   echo '<script>alert("Error inserting data: ' . $error . '");</script>';
    // }

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
  <style>
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
    }

    .form-group input[type="text"],
    .form-group select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
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
  <h2>far_ord_ri</h2>
  <form action="tranksaksiforminput.php" method="POST">
    <div class="form-group">
      <input type="hidden" id="no" name="no"value="<?php echo ($no !== '') ? $no : ''; ?>" >
    </div>
    <div class="form-group">
      <label for="id_sroom">ID Sroom:</label>
      <input type="text" id="id_sroom" name="id_sroom" value="<?php echo ($id_sroom !== '') ? $id_sroom : ''; ?>" required>
    </div>
    <div class="form-group">
      <label for="trs_type">Transaction Type:</label>
      <input type="text" id="trs_type" name="trs_type"value="<?php echo ($trs_type !== '') ? $trs_type : ''; ?>"  required>
    </div>
    <div class="form-group">
      <label for="month">Month:</label>
      <input type="text" id="month" name="month"value="<?php echo ($month !== '') ? $month : ''; ?>"  required>
    </div>
    <div class="form-group">
      <label for="no_sp">No SP:</label>
      <input type="text" id="no_sp" name="no_sp" value="<?php echo ($no_sp !== '') ? $no_sp : ''; ?>" required>
    </div>
    <div class="form-group">
      <label for="id_supp">ID Supplier:</label>
      <input type="text" id="id_supp" name="id_supp" value="<?php echo ($id_supp !== '') ? $id_supp : ''; ?>" required>
    </div>
    <div class="form-group">
      <label for="part_code">Part Code:</label>
      <input type="text" id="part_code" name="part_code" value="<?php echo ($part_code !== '') ? $part_code : ''; ?>" required>
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
    echo $id;
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
