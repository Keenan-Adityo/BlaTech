<?php
session_start();
include "connect.php";
$foto = $_FILES['foto']['name'];
if(isset($_POST['insert'])){
	if($foto!=''){
		$upload = 'assets/'.$foto;
		move_uploaded_file($_FILES['foto']['tmp_name'],$upload);
	}
	$sql = "insert into user(foto) values('$upload') ";
	$query = mysqli_query($conn,$sql);
	if($query){
		?>
		<!-- Javascript -->
		<script>alert('Foto Berhasil Ditambahkan!');document.location='profile.php';</script>
		<?php
	}
}

    ?>

<form name='formulir' method='post' 
action='<?php $_SERVER['PHP_SELF']; ?>' enctype='multipart/form-data' >
    <tr >
		<td>Foto</td>
		<td>:</td>
		<td><input type="file" accept=".png,.jpg" name="foto" ></td>
	</tr>

    <tr>
		<td></td>
		<td></td>
		<td><input name='insert' type='submit' value='POST' class="btn"></td>
	</tr>	
</form>