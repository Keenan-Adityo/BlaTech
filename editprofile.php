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

$filename = $_FILES["foto"]["name"];
$tempname = $_FILES["foto"]["tmp_name"];
$folder = "./assets/profile_picture/" . $filename;

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
		<td>Username</td>
        <td>:</td>
        <td><input type="text" name="username" id="username"  class="editprofile" ></input></td>
	</tr>
    <tr>
		<td>Nama</td>
        <td>:</td>
        <td><input name="nama" id="nama" class="editprofile" ></input>
	</tr>
    <tr>
		<td>Bio</td>
        <td>:</td>
        <td><textarea name="bio" id="bio" maxlength="100" class="editprofile" ></textarea></td>
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