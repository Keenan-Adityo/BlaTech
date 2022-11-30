<?php
session_start();
include 'connect.php';

$_SESSION['login']=false;

$username = $_POST['username'];
$password = $_POST['password'];
$login =$_POST['login'];

$sql = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);

if(isset($_POST['login'])){
	if($row['username']==$username && $row['password']==$password){
		$_SESSION['id'] = $row['id'];
    $_SESSION['pfp'] = $row['foto'];
    $_SESSION['username'] = $row['username'];
		?>
		<script> alert("Berhasil login"); document.location='home.php';</script>
		<?php
		$_SESSION['login'] = true;
	}else{
			?>
		<script> alert("Password atau Username Salah!"); document.location='index.php';</script>
		<?php
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
<h1 class="text-center">Selamat Datang!</h1>
<div class="container">
<div class="row">
<div class="col-md-5 mx-auto">
<div class="card card-body">
    <img src="assets/logo.png" width="200" length="200" style="margin : auto">
    <form id="submitForm" name="form" method="post">
        <lSabel for="username">Username</lSabel>
        <input name='username' type='text' placeholder="username" class="form-control" required
				oninvalid="this.setCustomValidity('masukan Username anda disini!')" 
				oninput="this.setCustomValidity('')" 
				class="input">
       
        <div class="form-group required">
            <label class="d-flex flex-row align-items-center" for="password">Password</label>
        <input name='password' type='password' placeholder="password" class="form-control" required
			    oninvalid="this.setCustomValidity('masukan Password anda disini!')" 
			    oninput="this.setCustomValidity('')" 
			    class="input">
        </div>
        <div class="form-group mt-4 mb-4">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="remember-me" name="remember-me" data-parsley-multiple="remember-me">
            <label class="custom-control-label" for="remember-me">Remember me?</label>
        </div>
        </div>

<div class="form-group pt-1">
<input name='login' type='submit' value='Log in' class="btn btn-primary" class="btn btn-primary btn-block">
</div>
</form>
<p class="small-xl pt-3 text-center">
<span class="text-muted">Belum punya akun di Blatech?</span>
<a href="signupbaru.php">Daftar!</a>
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