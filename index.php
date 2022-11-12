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
		$username = $_SESSION['id'];
		$username = $_SESSION['username'];
		$password = $_SESSION['password'];
		$password = $_SESSION['nama'];
		$email = $_SESSION['email'];
		$bio = $_SESSION['bio'];

		//kurang foto!

		?>
		<script> alert("Berhasil login"); document.location='view.php';</script>
		<?php
	}else{
			?>
		<script> alert("Password atau Username Salah 1"); document.location='index.php';</script>
		<?php
	}
}

?>


<form name="form" method="post">

<h1 align="center">blaTech</h1>
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
	<tr>
		<td>Tidak Punya Akun di Blatech? ,kamu harus <a href="signup.php">Daftar!</a></td>
	</tr>
</table>

<html>