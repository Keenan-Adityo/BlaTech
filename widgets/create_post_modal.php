<?php
session_start();
include "connect.php";

$foto = $_FILES['foto']['name'];
$desc = $_POST['desc'];
$id   = $_SESSION['id'];
$username = $_SESSION['username'];
$pfp = $_SESSION['pfp'];
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
<div class="modal fade modal-sm" id="create_post" aria-hidden="true" aria-labelledby="create_post_title" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="create_post_title">Create Post</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form name='formulir' method='post' action='<?php $_SERVER['PHP_SELF']; ?>' enctype='multipart/form-data' >

        <div class='d-flex flex-row justify-content-start'>
                <div class='p-2'>
                    <img src='assets/profile_picture/<?=  $pfp ?>' alt='avatar' class='avatar' style='width: 25px; height: 25px;'>
                </div>
                <div class='p-2 flex-fill'><b> <?=  $username ?></b></div>
            </div>
              <textarea name="desc" class="form-control mb-2"></textarea>
          <input type="file" accept=".png,.jpg" name="foto" class="form-control mb-2">
          <input name='insert' type='submit' value='Create Post' class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
</div>
