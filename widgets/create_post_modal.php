<?php
session_start();
include "connect.php";

$foto = $_FILES['foto']['name'];
$desc = $_POST['desc'];
$id   = $_SESSION['id'];
if(isset($_POST['insert'])){
	

	$filename = $_FILES["foto"]["name"];
    $tempname = $_FILES["foto"]["tmp_name"];
    $folder = "./assets/feed_post/". $filename;
    move_uploaded_file($tempname,$folder);

	$sql = "INSERT INTO `feedpost`(`id_user`,`description`,`foto_feedpost`) VALUES ('$id','$desc','$filename')";

	if( $query = mysqli_query($conn,$sql)){
		?>
        <script>
            alert("Post Berhasil Dimasukan");
            document.location="home.php";
        </script>
    <?php

}
}
?>
<div class="modal fade" id="create_post" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Modal 1</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <table>
        <form name='formulir' method='post' action='<?php $_SERVER['PHP_SELF']; ?>' enctype='multipart/form-data' >

            <tr >
            <td>Ceritakan Apa Yang Kamu Pikirkan!</td>
            <td></td>
            <td><textarea name="desc"></textarea></td>
          </tr>
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
        </table>
      </div>
    </div>
  </div>
</div>
