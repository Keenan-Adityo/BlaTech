<?php
session_start();
include 'connect.php';

$_SESSION['login']=false;

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
		$_SESSION['login'] = true;
	}else{
			?>
		<script> alert("Password atau Username Salah!"); document.location='index.php';</script>
		<?php
	}
}

?>

<html>
<head>
    <title>Blatech</title>
</head>

<body>
<link rel="stylesheet" href="index.css">
<div class="wrapper">
    <div class="get">
        <p id="p1" > <b>BlaTech</b><br>Cari sekarang juga.</p>
        <p id="p2"><input type="submit" value="Dapatkan"></p>
    </div>
<form name="form" method="post">

<img src="./assets/logo.png"  width="200px" height="200px" style=" display: block; margin-left: auto;margin-right: auto;" >
<table align="center" border="0">
	<tr>
		<td><input name='username' type='text' placeholder="username" required
				oninvalid="this.setCustomValidity('masukan Username anda disini!')" 
				oninput="this.setCustomValidity('')" 
				class="input"></td>
	</tr>
	<br>
	<tr>
		<td><input name='password' type='password' placeholder="password" required
				oninvalid="this.setCustomValidity('masukan Password anda disini!')" 
				oninput="this.setCustomValidity('')" 
				class="input"></td>
	</tr>
	<br>
	<tr>
		<td><input name='login' type='submit' value='Log in'></td>
	</tr>
	
</table><div class="signup">
<p align="center">Tidak Punya Akun di Blatech? <a href="signup.php">Daftar!</a></p>
</div>
</form>
</div>
</body>

</html>