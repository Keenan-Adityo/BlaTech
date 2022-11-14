<?php
session_start();
include 'connect.php';

$id= $_SESSION['id'];
$bio = $_POST['bio']
$foto = $_POST['foto'];

if(isset($_POST['signup'])){

	$filename = $_FILES["foto"]["name"];
    $tempname = $_FILES["foto"]["tmp_name"];
    $folder = "./assets/profilepic/" . $filename;

    $conn = mysqli_connect($host,$user,$pass,$db) or die("Koneksi Gagal");
    $sql = "insert into user(bio,foto) values('$bio', '$filename') where id='$id' ";
    $query = mysqli_query($conn,$sql);
        if($query){
            if (move_uploaded_file($tempname, $folder)) {
                echo "Berhasil Upload!";
            } else {
                echo "Gagal Upload";
            }

    
}

?>


<form name="form" method="post">

<img src="./assets/logo.png"  width="200px" height="200px" style=" display: block; margin-left: auto;margin-right: auto;" >
<table align="center" border="0">
    <tr>
		<td><p>Katakan Semua Tentangmu! : </p></td>
	</tr>
	<tr>
		<td><textarea name="bio"></textarea>
	</tr>
    </br>
    <tr>
		<td><p>Upload Foto Terbaikmu! : </p></td>
	</tr>
    <tr>
	<tr>
		<td><input name='file' type='file'></td>
	</tr>
	<br>
    <tr>
		<td><input name='signup' type='submit' value='Sign Up!' align="center"></td>
	</tr>
</table>
