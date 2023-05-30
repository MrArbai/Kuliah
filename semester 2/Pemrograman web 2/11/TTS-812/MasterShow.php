<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="Style.css">
    <title>Hello, world!</title>
  </head>
  <body>
   <nav class="navbar">
    <div class="content">
      <div class="logo"><a href="#">Mikonots</a></div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="index.php">Home</a></li>
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
 <div class="banner">
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
  <div class="root">
      <div class="a">
        <?php
        for ($page = 1; $page <= $number_of_page; $page++) {
        echo '<a href = "MasterShow.php?page=' . $page . '">'. $page .' </a>';
        }
        ?>
      </div>
      <div class="add-button">
        <button><a href='masterforminput.php'> Add </a></button>
      </div>
  </div>
  
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
