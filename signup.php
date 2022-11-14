<?php
session_start();
include 'connect.php';

$id= $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$email = $_POST['email'];


if(isset($_POST['signup'])){
    ?>
    
        <script>
    if(confirm("Apakah anda yakin dengan data anda?")){
        </script>
            <?php
                $sql = "INSERT INTO user(username,password,email,nama) values ('$username','$password','$email','$nama')";
                $query = mysqli_query($conn,$sql);
            ?>
        <script> 
            alert("Data Berhasil Dimasukan"); 
            document.location='index.php';
        </script>
    }



    <?php
}
?>


<<form name="form" method="post">

<h1 align="center">blaTech</h1>
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
		<td><input name='signup' type='submit' value='Log in'></td>
	</tr>
</table>

<html>
