<?php
session_start();
include 'connect.php';
//include 'isSigning.php';

$username = $_SESSION['username'];
$password = $_SESSION['password'];
$nama = $_SESSION['nama'];
$email = $_SESSION['email'];
$bio = $_POST['bio'];

if(isset($_POST['signup'])){

    $sql = "select * from user where username ='$username'";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);
    $id = $row['id'];

    $filename = $_FILES["foto"]["name"];
    $tempname = $_FILES["foto"]["tmp_name"];
    $folder = "./assets/profile_picture/". $filename;
    move_uploaded_file($tempname,$folder);

    $sql2 = "UPDATE `user` SET `bio` = '$bio', `foto` = '$filename' WHERE `user`.`id` = $id";

    if(mysqli_query($conn,$sql2)){
        ?>   
            <script>
            alert("Data Berhasil Dimasukan!");
            document.location="index.php";
            </script>
        <?php
            session_destroy();
    }else{
        
         ?>
        <script>
            alert("data yang anda masukan salah");
            document.location="signup.php";
        </script>
        <?php
        session_destroy();
    }
      
    
}

?>

<html lang="en">
<head>
<meta charset="UTF-8">
<title>Blatech</title>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Muli'><link rel="stylesheet" href="./style3.css">
</head>
<body>

<div class="pt-5">
<h1 class="text-center">Hi , <?php echo "$username";?></h1>  
<div class="container">
<div class="row">
<div class="col-md-5 mx-auto">
<div class="card card-body">
    <img src="assets/logo.png" width="200" length="200" style="margin : auto">
    <form id="form" name="form" method="post" enctype='multipart/form-data'>
    <div class="form-group required">
            <label class="d-flex flex-row align-items-center" for="password">Katakan Semua Tentangmu! : </label>
            <textarea name="bio" id="bio" style="resize: none; width: 400px; height: 200px;" class="signup2" ></textarea>
        </div>
        <br>
        <br>
    <div class="form-group required">
            <label class="d-flex flex-row align-items-center" for="password">Upload Foto Terbaik Mu : </label>
            <input type="file" accept=".png,.jpg" name="foto" >
        </div>


<div class="form-group pt-1">
<input name='signup' type='submit' value='Mulai Menjelajah Blatech!' class="login" class="btn btn-primary btn-block">|<input type="button" onclick="location.href='index.php';" value="Lewati">
</div>
</form>
</p>
</div>
</div>
</div>
</div>
</div>


<script async src="https://www.googletagmanager.com/gtag/js?id=UA-80520768-2" type="a855e61bf267a2065d1a2508-text/javascript"></script>
<script type="a855e61bf267a2065d1a2508-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-80520768-2');
</script>
<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="a855e61bf267a2065d1a2508-|49" defer=""></script></body>
</html>