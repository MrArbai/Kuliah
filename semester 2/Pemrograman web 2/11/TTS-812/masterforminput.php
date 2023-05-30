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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="Style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Hello, world!</title>
    <style>
  </style>
   </head>
  <body>
   <nav class="navbar">
    <div class="content">
      <div class="logo"><a href="#">Mikonots</a></div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="#">Home</a></li>
        <li><a href="MasterShow.php">Master</a></li>
        <li><a href="tranksaksishow.php">Transaksi</a></li>
        <form method="GET">
          <input type="text" name="search" placeholder="Deskripsi..." value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
          <button type="submit">Search</button>
        </form>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
  <section>
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
  </section>

     
    <footer class="footer">
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

    <script>
    const body = document.querySelector("body");
    const navbar = document.querySelector(".navbar");
    const menu = document.querySelector(".menu-list");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    menuBtn.onclick = ()=>{
      menu.classList.add("active");
      menuBtn.classList.add("hide");
      cancelBtn.classList.add("show");
      body.classList.add("disabledScroll");
    }
    cancelBtn.onclick = ()=>{
      menu.classList.remove("active");
      menuBtn.classList.remove("hide");
      cancelBtn.classList.remove("show");
      body.classList.remove("disabledScroll");
    }

    window.onscroll = ()=>{
      this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
    }
  </script>
  </body>
</html>
