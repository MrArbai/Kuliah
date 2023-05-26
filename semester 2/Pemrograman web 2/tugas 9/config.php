<?php

 $Host = 'localhost';
 $Name = 'learn';
 $Username ='learn';
 $Password ='learn';

 $mysqli = mysqli_connect($Host, $Username, $Password, $Name);

 if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
 ?>