<?php

include_once("config.php");

$result = mysqli_query($mysqli, " SELECT * FROM perusahaan ORDER BY KODE ASC ");
?>

<html>
<head>
	<title> Homepage</title>
</head>
<body>
<h2><center> Daftar Perusahaan </center></h2><br>
<center>
<table width='80%' border=1>
	
	<tr>
		<th> Perusahaan </th> <th> Alamat </th> <th> Telephone </th> <th> Email </th> <th> Update  </th> <th> Delete </th>
	</tr>
	
	<?php
	while($user_data = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$user_data[NAMA_PRSH]."</td>";
		echo "<td>".$user_data[ALAMAT]."</td>";
		echo "<td>".$user_data[TLP]."</td>";
		echo "<td>".$user_data[EMAIL]."</td>";
		echo "<td><a href='edit.php?id=$user_data[KODE]'> Edit </a></td>";
		echo "<td><a href='delete.php?KODE=$user_data[KODE]'> Hapus </a></td></tr>";
		
	}
	?>
	</table> <br>
<a href="add.php"> Tambah Data Perusahaan </a>
</center>
</body>
</html>