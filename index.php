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

<html>
<head>
    <title>Blatech</title>
</head>

<body>
<link rel="stylesheet" href="index.css">
<div class="wrapper">
    <div class="get">
        <p id="p1" > <b>BlaTech</b><br>We Bring The Tech To Blater!</p>
        <p id="p2"><button border="0"><a target="_blank" href="https://www.google.com/search?q=fakultas%20teknik%20unsoed&rlz=1C1VDKB_enID1027ID1027&sxsrf=ALiCzsbZ-sLA6paxEQWlX8gcfJfjB2pnzA:1669708517354&ei=4bqFY4jIN4-uz7sPgYqh8Ao&ved=2ahUKEwiPjrj49NL7AhV5ILcAHb0bDccQvS56BAgjEAE&uact=5&oq=fakultas+teknik+unsoed&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzIICAAQgAQQywEyBQgAEIAEMgUIABCABDIOCC4QgAQQxwEQrwEQywEyBggAEBYQHjIGCAAQFhAeMgYIABAWEB4yBggAEBYQHjIGCAAQFhAeMgYIABAWEB46CggAEEcQ1gQQsAM6BwgAELADEEM6DQgAEOQCENYEELADGAE6DAguEMgDELADEEMYAjoSCC4QxwEQrwEQyAMQsAMQQxgCOg8ILhDUAhDIAxCwAxBDGAI6BAgAEEM6BAguEEM6CgguEMcBEK8BEEM6CwguEIAEEMcBEK8BOgUILhCABEoECEEYAEoECEYYAVDGAljxCmC7C2gBcAF4AIABmAGIAdAFkgEDMS41mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz-serp&tbs=lf:1,lf_ui:2&tbm=lcl&rflfq=1&num=10&rldimm=12606058844528550128&lqi=ChZmYWt1bHRhcyB0ZWtuaWsgdW5zb2VkSMCSzO_6lYCACFoqEAAQARgAGAEYAiIWZmFrdWx0YXMgdGVrbmlrIHVuc29lZCoGCAIQABABkgEVdW5pdmVyc2l0eV9kZXBhcnRtZW50&sa=X&rlst=f#rlfi=hd:;si:12606058844528550128,l,ChZmYWt1bHRhcyB0ZWtuaWsgdW5zb2VkSMCSzO_6lYCACFoqEAAQARgAGAEYAiIWZmFrdWx0YXMgdGVrbmlrIHVuc29lZCoGCAIQABABkgEVdW5pdmVyc2l0eV9kZXBhcnRtZW50;mv:[[-7.4285981,109.33763],[-7.4299303000000005,109.33626059999999]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2">Find Us!</a></button></p>
    </div>
<form name="form" method="post">

<img src="./assets/logo.png"  width="200px" height="200px" style=" display: block; margin-left: auto;margin-right: auto;" >
<table align="center" border="0">
	<tr>
		<td><input name='username' type='text' placeholder="username" required
				oninvalid="this.setCustomValidity('masukan Username anda disini!')" 
				oninput="this.setCustomValidity('')" 
				class="input"></td>
	</tr>
	<br>
	<tr>
		<td><input name='password' type='password' placeholder="password" required
				oninvalid="this.setCustomValidity('masukan Password anda disini!')" 
				oninput="this.setCustomValidity('')" 
				class="input"></td>
	</tr>
	<br>
	<tr>
		<td><input name='login' type='submit' value='Log in' class="login"></td>
	</tr>
	
</table><div class="signup">
<p align="center">Tidak Punya Akun di Blatech? <a href="signup.php">Daftar!</a></p>
</div>
</form>
</div>
</body>

</html>