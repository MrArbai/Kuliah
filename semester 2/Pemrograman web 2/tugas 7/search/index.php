<?php
include_once("config.php");

?>
<html>
<head>
<title>HOMEPAGE</title>
</head>
<body>

<form action="index.php" method="post">
<label>Cari :</label>
<input type="text" name="cari">
<input type="submit" >

</form>

<table border='1"'>
<tr>
<th>Name</th>
<th>Email</th>

<th>Mobile</th>
</tr>

<?php
// printr($_POST['cari']);
if (isset($_POST['cari'])) {
$cari = $_POST['cari'];
} else {
$cari = '';

}

$ambildata = mysqli_query($mysqli,
"SELECT * "
. "FROM users "
. "where "
. "name like '%$cari%' or "
. "email like '%$cari%' or "
. "mobile like '%$cari%' "
. "ORDER BY name DESC");

$results_per_page = 5;
$number_of_result = mysqli_num_rows($ambildata);

$number_of_page = ceil($number_of_result / $results_per_page);

if (isset($_GET['page'])) {
$page = $_GET['page'];
} else {
$page = 1;
}

$page_first_result = ($page - 1) * $results_per_page;

$ambildata_perhalaman = mysqli_query($mysqli,"SELECT * "
. "FROM users "
. "where name like '%$cari%' or "
. "email like '%$cari%' or "
. "mobile like '%$cari%' "
. "ORDER BY name LIMIT " . $page_first_result . ',' . $results_per_page);

while ($user_data = mysqli_fetch_array($ambildata_perhalaman)) {
    echo "<tr>";
    echo "<td>" . $user_data['name'] . "</td>";
    echo "<td>" . $user_data['email'] . "</td>";
    echo "<td>" . $user_data[ 'mobile'] . "</td>";
    echo "</tr>";
}
?>
</table>
<?php

//display the link of the pages in URL

for ($page = 1; $page <= $number_of_page; $page++) {
echo '<a href = "index.php?page=' . $page . '">'. $page .' </a>';

}

?>
</div>
</div>    
</body>
</html>