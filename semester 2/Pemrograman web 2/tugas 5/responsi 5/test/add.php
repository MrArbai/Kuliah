<html>
<head>
    <title>Add Perusahaan </title>
</head>

<body>
<form action = "add.php" method = "post" name= "form1">
        <table width = "25%" border = "0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="Alamat"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add" ></td>
            </tr>
        </table>
</form>
<?php
if(isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $Alamat = $_POST['Alamat'];

    include_once("config.php");
    $result = mysqli_query($mysqli, "INSERT INTO perusahaan(nama_prsh, email, telepon,alamat)VALUES('$name','$email','$mobile','$Alamat')");
    echo "Perusahaan added successfully. <a href='index.php'>View Data Perusahaan</a>";
}
?>
</body>
</html>