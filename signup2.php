<?php
session_start();
include 'connect.php';
include 'isSigning.php';

$username = $_SESSION['username'];
$password = $_SESSION['password'];
$nama = $_SESSION['nama'];
$email = $_SESSION['email'];
$bio = $_POST['bio'];
$foto = $_POST['foto'];


if(isset($_POST['signup'])){

	$filename = $_FILES["foto"]["name"];
    $tempname = $_FILES["foto"]["tmp_name"];
    $folder = "./assets/profile_picture/" . $filename;

    //!!!!!!!!!!!!!masih error dibagian sini!!!!!!!!!!!!!
    $sql = "update user set foto='$foto',bio='$bio' where username='$username' AND password='$password' AND nama='$nama' AND email='$email'" ;
    mysqli_query($conn,$sql);
    //!!!!!!!!!!!!!masih error bagian sini!!!!!!!!!!!!!

    if(mysqli_query($conn,$sql)){
        ?>   
            <script>
            alert("Data Berhasil Dimasukan!");
            document.location="index.php";
            </script>
        <?php
            session_destroy();
    }else{
        
         ?>
        <script>
            alert("data yang anda masukan salah");
            document.location="signup.php";
        </script>
        <?php
        session_destroy();
    }
      
    
}

?>

<html>
<head>
    <title>Blatech</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<div class="wrapper">
    <div class="get">
        <p id="p1" > <b>BlaTech</b><br>Cari sekarang juga.</p>
        <p id="p2"><input type="submit" value="Dapatkan"></p>
    </div>
<form name="form" method="post">

<img src="./assets/logo.png"  width="200px" height="200px" style=" display: block; margin-left: auto;margin-right: auto;" >
<table align="center" border="0">
    <tr>
		<td><p>Katakan Semua Tentangmu! : </p></td>
	</tr>
	<tr>
		<td><textarea name="bio" id="bio" style="resize: none; width: 400px; height: 100px;"></textarea>
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
		<td><input name='signup' type='submit' value='Sign Up!' align="center">|<input type="button" onclick="location.href='index.php';" value="Lewati" />
	</tr>
</table>
</form>
</body>
</html>