<?php
session_start();
include 'connect.php';

if(isset($_POST['signup'])){
    
    $_SESSION['username']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];
    $_SESSION['nama']=$_POST['nama'];
    $_SESSION['email']=$_POST['email'];

    ?>
        <script>
            alert("Data Sudah Dimasukan!, Lanjutkan untuk mengisi bio dan foto di window Selanjutnya!");
            document.location="signup2.php";
        </script>
    <?php


    
}
?>
<head>
    <title>Blatech</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
</head>
<body>
<img src="./assets/logo.png"  width="200px" height="200px" style=" display: block; margin-left: auto;margin-right: auto;" >
<form name="form" method="post">

<table align="center" border="0">
	<tr>
		<td><input name='username' type='text' placeholder="Username"></td>
	</tr>
	<br>
	<tr>
		<td><input name='password' type='password' placeholder="Password"></td>
	</tr>
	<br>
	<tr>
		<td><input name='nama' type='nama' placeholder="Nama Lengkap"></td>
	</tr>
    <br>
	<tr>
		<td><input name='email' type='email' placeholder="Email"></td>
	</tr>
    <br>
    <tr>
		<td><input name='signup' type='submit' value='Signup'>|<a href="index.php"><button>Kembali</button></td>
	</tr>
</table>
</body>
<html>
