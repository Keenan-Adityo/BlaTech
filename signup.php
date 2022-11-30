<?php
session_start();
include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$email = $_POST['email'];
$nama = $_POST['nama'];

if(isset($_POST['signup'])){
    if($password == $password2){
    $sql = "select * from user where username ='$username'";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);
    if($username == $row['username']){
        ?>
        <script>
            alert("Silahkan Pilih Username Lain");
            document.location="signupbaru.php";
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
}
}
?>
<html>
<link rel="stylesheet" href="index.css">
<head>
    <title>Blatech</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
</head>
<body>
<div class="wrapper">
    <div class="get">
        <p id="p1" > <b>BlaTech</b><br>We Bring The Tech To Blater!</p>
        <p id="p2"><button><a target="_blank" href="https://www.google.com/search?q=fakultas%20teknik%20unsoed&rlz=1C1VDKB_enID1027ID1027&sxsrf=ALiCzsbZ-sLA6paxEQWlX8gcfJfjB2pnzA:1669708517354&ei=4bqFY4jIN4-uz7sPgYqh8Ao&ved=2ahUKEwiPjrj49NL7AhV5ILcAHb0bDccQvS56BAgjEAE&uact=5&oq=fakultas+teknik+unsoed&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzIICAAQgAQQywEyBQgAEIAEMgUIABCABDIOCC4QgAQQxwEQrwEQywEyBggAEBYQHjIGCAAQFhAeMgYIABAWEB4yBggAEBYQHjIGCAAQFhAeMgYIABAWEB46CggAEEcQ1gQQsAM6BwgAELADEEM6DQgAEOQCENYEELADGAE6DAguEMgDELADEEMYAjoSCC4QxwEQrwEQyAMQsAMQQxgCOg8ILhDUAhDIAxCwAxBDGAI6BAgAEEM6BAguEEM6CgguEMcBEK8BEEM6CwguEIAEEMcBEK8BOgUILhCABEoECEEYAEoECEYYAVDGAljxCmC7C2gBcAF4AIABmAGIAdAFkgEDMS41mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz-serp&tbs=lf:1,lf_ui:2&tbm=lcl&rflfq=1&num=10&rldimm=12606058844528550128&lqi=ChZmYWt1bHRhcyB0ZWtuaWsgdW5zb2VkSMCSzO_6lYCACFoqEAAQARgAGAEYAiIWZmFrdWx0YXMgdGVrbmlrIHVuc29lZCoGCAIQABABkgEVdW5pdmVyc2l0eV9kZXBhcnRtZW50&sa=X&rlst=f#rlfi=hd:;si:12606058844528550128,l,ChZmYWt1bHRhcyB0ZWtuaWsgdW5zb2VkSMCSzO_6lYCACFoqEAAQARgAGAEYAiIWZmFrdWx0YXMgdGVrbmlrIHVuc29lZCoGCAIQABABkgEVdW5pdmVyc2l0eV9kZXBhcnRtZW50;mv:[[-7.4285981,109.33763],[-7.4299303000000005,109.33626059999999]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2">Find Us!</a></button></p>
    </div>
<img src="./assets/logo.png"  width="200px" height="200px" style=" display: block; margin-left: auto;margin-right: auto;" >
<form name="form" method="post">
<table align="center" border="0">
    <tr>
        
		<td><input name='nama' type='nama' placeholder="Nama Lengkap" class="signup2" required 
				oninvalid="this.setCustomValidity('masukan Nama Lengkap anda disini!')" 
				oninput="this.setCustomValidity('')" ></td>
	</tr>
    <br>
	<tr>
		<td><input name='email' type='email' placeholder="Email" class="signup2" required
				oninvalid="this.setCustomValidity('masukan Email anda disini!')" 
				oninput="this.setCustomValidity('')" ></td>
	</tr>
    <br>
	<tr>
		<td><input name='username' type='' placeholder="Username" class="signup2" required
				oninvalid="this.setCustomValidity('masukan Username anda disini!')" 
				oninput="this.setCustomValidity('')" ></td>
	</tr>
	<br>
	<tr>
		<td><input name='password' type='password' placeholder="Password" class="signup2" required
				oninvalid="this.setCustomValidity('masukan password anda disini!')" 
				oninput="this.setCustomValidity('')" ></td>
	</tr>
    <tr>
		<td><input name='password2' type='password' placeholder="Konfirmasi Password" class="signup2" required
				oninvalid="this.setCustomValidity('Konfrimasi password anda disini!')" 
				oninput="this.setCustomValidity('')" ></td>
	</tr>
	<br>
	
    <tr>
		<td><input name='signup' type='submit' value='Signup'style="border: 2px solid black;
  border-radius: 10px 10px;" > | <input type="button" onclick="location.href='index.php';" value="Kembali" style="border: 2px solid black;
  border-radius: 10px 10px;" /></td>
	</tr>
</table>
</body>
</html>
