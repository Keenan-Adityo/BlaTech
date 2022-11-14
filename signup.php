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
            alert("Lanjutkan di window Selanjutnya!");
            document.location="signup2.php";
        </script>
    <?php

    
}
?>


<form name="form" method="post">

<img src="./assets/logo.png"  width="200px" height="200px" style=" display: block; margin-left: auto;margin-right: auto;" >
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
		<td><input name='signup' type='submit' value='Next!'></td>
	</tr>
</table>

<html>
