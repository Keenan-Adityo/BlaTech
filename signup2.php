<?php
session_start();
include 'connect.php';

$username = $_SESSION['username'];
$password = $_SESSION['password'];
$nama = $_SESSION['nama'];
$email = $_SESSION['email'];
$bio = $_POST['bio'];
$foto = $_POST['foto'];

$sql = "INSERT INTO user(username,password,email,nama) values ('$username','$password','$email','$nama')";
mysqli_query($conn,$sql);

if(isset($_POST['signup'])){

	$filename = $_FILES["foto"]["name"];
    $tempname = $_FILES["foto"]["tmp_name"];
    $folder = "./assets/profilepic/" . $filename;

    $sql = "insert into user(foto) values('$folder')";
    $query = mysqli_query($conn,$sql);

    if($query){
        ?>
            <script>
            alert("Data Berhasil Dimasukan!");
            document.location="index.php";
            </script>
        <?php
    }else{
        
        session_destroy();
        ?>
        <script>
            alert("data yang anda masukan salah");
            document.location="signup.php";
        </script>
        <?php
    }
      
    
}

?>

<head>
    <title>Blatech</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
</head>
<body>
<form name="form" method="post">

<img src="./assets/logo.png"  width="200px" height="200px" style=" display: block; margin-left: auto;margin-right: auto;" >
<table align="center" border="0">
    <tr>
		<td><p>Katakan Semua Tentangmu! : </p></td>
	</tr>
	<tr>
		<td><textarea name="bio" ></textarea>
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