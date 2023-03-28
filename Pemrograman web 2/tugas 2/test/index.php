<?php

include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM perusahaan");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
<table width = '80%' border=1>

<tr>
    <th>PERUSAHAAN</th> <th>ALAMAT</th> <th>EMAIL</th>
</tr>
<?php
while($user_data = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>".$user_data['nama_prsh']."</td>";
    echo "<td>".$user_data['alamat']."</td>";
    echo "<td>".$user_data['email']."</td></tr>";    
}
?>
</table>
</body>
</html>