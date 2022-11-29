<?php
session_start();
include 'connect.php';




$filename = $_FILES["foto"]["name"];
$tempname = $_FILES["foto"]["tmp_name"];
$folder = "./assets/profile_picture/" . $filename;
if($id = $_SESSION['id']){
	$sesi = $id;
	} else if($_SESSION[ 'admin']) {
	$sesi = $_SESSION('admin');
	}
	$query = mysqli_query($conn,"SELECT * FROM user WHERE id = '$id'");
	$data= mysqli_fetch_array($query);

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<body>
<form class="" name="form" method="post" >
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Nama Lengkap</label>
      <input type="text" class="form-control" name="nama2" id="validationCustom01" placeholder="Nama Lengkap" value="<?PHP echo$data['nama'] ?>" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input type="text" class="form-control" name="username2" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" value="<?PHP echo$data['username'] ?>"required>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Bio</label>
      <input type="text" class="form-control" name="bio2" id="validationCustom03" value="<?PHP echo$data['bio'] ?>">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">PASSWORD</label>
      <input type="text" class="form-control" name="password2" id="validationCustom04" placeholder="PASSWORD" value="<?PHP echo$data['password'] ?>" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Email</label>
      <input type="email" class="form-control" name="email2" id="validationCustom05" placeholder="email" value="<?PHP echo$data['email'] ?>"required>
    </div>
  </div>
  <input class="btn btn-primary" type="submit" name="simpan" value="Simpan"></input> <input  class="btn btn-primary" type="button" onclick="location.href='Profile.php';" value="Kembali" />
</form>
</body>
<?php
if($_POST['simpan']){
	$username = ($_POST['username2']);
	$nama = ($_POST['nama2']);
	$bio = ($_POST['bio2']);
	$password = ($_POST['password2']);
	$email = ($_POST['email2']);
	mysqli_query($conn,"update user set username ='$username', nama = '$nama', bio='$bio',password ='$password', email='$email' where id = $sesi");
	header("location: profile.php");
}
?>

<style>
  body{
    padding-top: 50px;
    padding-left: 50px;
  }
</style>