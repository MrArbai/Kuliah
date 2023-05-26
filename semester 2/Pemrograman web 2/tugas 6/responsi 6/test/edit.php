<?php

include_once("config.php");


if(isset($_POST['update']))
{
    $id = $_POST['KODE'];
    
    $NAMA_PRSH=$_POST['NAMA_PRSH'];
    $ALAMAT=$_POST['ALAMAT'];
    $TLP=$_POST['TLP'];
    $EMAIL=$_POST['EMAIL'];

   
    $result = mysqli_query($mysqli, "UPDATE perusahaan SET NAMA_PRSH='$NAMA_PRSH', ALAMAT='$ALAMAT', TLP='$TLP', EMAIL='$EMAIL' WHERE KODE='$id'");
   
    header("Location: index.php");
}



$id = $_GET['id'];



$result = mysqli_query($mysqli, "SELECT * FROM perusahaan WHERE KODE=$id");
while($user_data = mysqli_fetch_array($result))
{
        $NAMA_PRSH = $user_data['NAMA_PRSH'];
        $ALAMAT = $user_data['ALAMAT'];
        $TLP = $user_data['TLP'];
        $EMAIL = $user_data['EMAIL'];
                
}


?>

<html>
<head>
	<title> Edit Data Perusahaan </title>
</head>
<body>
<h2><center> Edit Data Perusahaan </center></h2><br>
<center>
<form action="edit.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td></td>
                <td><input type="hidden" name="KODE" value=<?php echo $_GET['id']; ?>> </td>
            </tr>
            <tr>
                <td>Nama Perusahaan</td>
                <td><input type="text" name="NAMA_PRSH" value="<?php echo $NAMA_PRSH; ?>"> </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="ALAMAT" value="<?php echo $ALAMAT; ?>"></td>
            </tr>
            <tr>
                <td>Telephone </td>
                <td><input type="text" name="TLP" value="<?php echo $TLP; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="EMAIL" value="<?php echo $EMAIL; ?>"></td>
            </tr>

            <tr>
                <td></td>
                
                <td><input type="submit" name="update" value="Update"></td> 
            </tr>
            

        </table> 
        <a href="index.php"> Home </a>
    </form>
   
</center>

</body>
</html>