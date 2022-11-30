<?php
session_start();
include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['konfirmasiPass'];
$email = $_POST['email'];
$nama = $_POST['nama'];

if(isset($_POST['login'])){
    if($password == $password2){
    $sql = "select * from user where username ='$username'";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);
    if($username == $row['username']){
        ?>
        <script>
            alert("Silahkan Pilih Username Lain");
            document.location="signup.php";
        </script>
    <?php

    }else{

    $sql1 = "INSERT INTO user(username,password,email,nama) values ('$username','$password','$email','$nama')";
    mysqli_query($conn,$sql1);

    $_SESSION['username']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];
    $_SESSION['nama']=$_POST['nama'];
    $_SESSION['email']=$_POST['email'];
    $_SESSION['prosesSign'] = true;

        ?>
        <script>
            alert("Data Berhasil Dimasukan!");
            document.location="signup2.php";
        </script>
    <?php

    }
    }else{
        ?>
        <script>
            alert("Konfirmasi Password Mungkin Salah");
            document.location="signupbaru.php";
        </script>
    <?php
    }
}
?>

<html lang="en">
<head>
<meta charset="UTF-8">
<title>Blatech Daftar</title>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Muli'><link rel="stylesheet" href="./style3.css">
</head>
<body>

<div class="pt-5">
<h1 class="text-center">Daftar!</h1>
<div class="container">
<div class="row">
<div class="col-md-5 mx-auto">
<div class="card card-body">
    <img src="assets/logo.png" width="200" length="200" style="margin : auto">
    <form name="form" method="post" enctype="multipart/form-data">
        <lSabel for="username">Nama Lengkap</lSabel>
        <input name='nama' type='text' placeholder="Nama Lengkap" class="form-control" required
				oninvalid="this.setCustomValidity('masukan Nama Lengkap anda disini!')" 
				oninput="this.setCustomValidity('')" 
				class="input">
       
        <div class="form-group required">
            <label class="d-flex flex-row align-items-center" for="password">Email</label>
        <input name='email' type='email' placeholder="Email" class="form-control" required
			    oninvalid="this.setCustomValidity('masukan email anda disini!')" 
			    oninput="this.setCustomValidity('')" 
			    class="input">
        </div>
        <div class="form-group required">
            <label class="d-flex flex-row align-items-center">Username</label>
        <input name='username' type='text' placeholder="Username" class="form-control" required
			    oninvalid="this.setCustomValidity('masukan username anda disini!')" 
			    oninput="this.setCustomValidity('')" 
			    class="input">
        
        <div class="form-group required">
            <label class="d-flex flex-row align-items-center" for="password">Password</label>
            <input name='password' type='password' placeholder="Password" class="form-control" required
			    oninvalid="this.setCustomValidity('masukan Password anda disini!')" 
			    oninput="this.setCustomValidity('')" 
			    class="input">
        </div>
        <div class="form-group required">
            <label class="d-flex flex-row align-items-center" for="password2">Konfirmasi Password</label>
            <input name='konfirmasipass' type='password' placeholder="Konfirmasi Password" class="form-control" required
			    oninvalid="this.setCustomValidity('Konfrimasi Password anda disini!')" 
			    oninput="this.setCustomValidity('')" 
			    class="input">
        </div>             
        </div>
        <div class="form-group mt-4 mb-4">

        

<div class="form-group pt-1">
<input name='login' type='submit' value='log in'style="border: 2px solid black;
  border-radius: 10px 10px;" > | <input type="button" onclick="location.href='index.php';" value="Kembali" style="border: 2px solid black;
  border-radius: 10px 10px;" />
</div>
</form>
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
