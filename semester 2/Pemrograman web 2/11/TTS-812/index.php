<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="Style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
 <div class="banner">
  
 </div>
 <div class="container">
  <div class="card">
    <h3>Master</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    <a href="#" class="btn">Read More</a>
  </div>
  <div class="card">
    <h3>Transaksi</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    <a href="#" class="btn">Read More</a>
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