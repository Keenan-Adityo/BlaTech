<?php
session_start();
include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];
$login =$_POST['login'];

$sql = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);
if(isset($_POST['login'])){
	if($row['username']==$username && $row['password']==$password){
		$_SESSION['id'] = $row['id'];

		?>
		<script> alert("Berhasil login"); document.location='home.php';</script>
		<?php
	}else{
			?>
		<script> alert("Password atau Username Salah!"); document.location='index.php';</script>
		<?php
	}
}

?>


<form name="form" method="post">

<img src="./assets/logo.png"  width="200px" height="200px" style=" display: block; margin-left: auto;margin-right: auto;" >
<table align="center" border="0">
	<tr>
		<td><input name='username' type='text' placeholder="username"></td>
	</tr>
	<br>
	<tr>
		<td><input name='password' type='password' placeholder="password"></td>
	</tr>
	<br>
	<tr>
		<td><input name='login' type='submit' value='Log in'></td>
	</tr>
	
</table>
<p align="center">Tidak Punya Akun di Blatech? <a href="signup.php">Daftar!</a></p>

<html>