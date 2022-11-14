<?php
session_start();
include "connect.php";
$foto = $_FILES['foto']['name'];
if(isset($_POST['insert'])){
	if($foto!=''){
		$upload = 'assets/'.$foto;
		move_uploaded_file($_FILES['foto']['tmp_name'],$upload);
	}
}

    ?>
    <tr >
		<td>Foto</td>
		<td>:</td>
		<td><input type="file" accept=".png,.jpg" name="foto" ></td>
	</tr>

    <tr>
		<td></td>
		<td></td>
		<td><input name='insert' type='submit' value='Tambah Data' class="btn btn-primary form-control"></td>
	</tr>	