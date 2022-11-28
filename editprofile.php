<?php
session_start();
include 'connect.php';
//include 'isSigning.php';

$id = $_SESSION['id'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$nama = $_SESSION['nama'];
$email = $_SESSION['email'];
$bio = $_POST['bio'];
$foto = $_POST['foto'];
$sql="update user set username='$username', nama='$nama', foto='$foto',bio='$bio' where id='$id'";
$id2= $row['id'];

if(isset($_POST['simpan'])){
	if($row['username']==$username && $row['password']==$password){
		$_SESSION['id'] = $row['id'];

		?>
		<script> alert("Berhasil disimpan"); document.location='profile.php';</script>
		<?php
		$_SESSION['simpan'] = true;
	}else{
			?>
		<script> alert("Ngga jadi edit"); document.location='index.php';</script>
		<?php
	}
}
?>

<form name="form" method="post">
<table align="center" border="0">
<tr>
		<td><p>Username : </p></td>
	</tr>
	<tr>
		<td><textarea name="username" id="username" style="resize: none; width: 400px; height: 100px;" class="editprofile" ></textarea>
	</tr>
    <tr>
		<td><p>Nama : </p></td>
	</tr>
	<tr>
		<td><textarea name="nama" id="nama" style="resize: none; width: 400px; height: 100px;" class="editprofile" ></textarea>
	</tr>
    <tr>
		<td><p>Bio : </p></td>
	</tr>
	<tr>
		<td><textarea name="bio" id="bio" style="resize: none; width: 400px; height: 100px;" class="editprofile" ></textarea>
	</tr>
    </br>
    <tr>
		<td><p>Profpict : </p></td>
	</tr>
    <tr>
	<tr>
		<td><input name='file' type='file' class="editprofile"></td>
	</tr>
	<br>
    <tr>
		<td><input name='simpan' type='submit' value='Simpan' align="center">|<input type="button" onclick="location.href='Profile.php';" value="Kembali" />
	</tr>
</table>

</form>