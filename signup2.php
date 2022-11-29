<?php
session_start();
include 'connect.php';
//include 'isSigning.php';

$username = $_SESSION['username'];
$password = $_SESSION['password'];
$nama = $_SESSION['nama'];
$email = $_SESSION['email'];
$bio = $_POST['bio'];
$foto = $_POST['foto'];


if(isset($_POST['signup'])){

    $sql = "select * from user where username ='$username'";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);
    $id = $row['id'];

	$filename = $_FILES["foto"]["name"];
    $tempname = $_FILES["foto"]["tmp_name"];
    $folder = "./assets/profile_picture/" . $filename;

    $sql2 = "update user set foto='$foto',bio='$bio' where id='$id'";

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

<html>
<link rel="stylesheet" href="index.css">
<head>
    <title>Blatech</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<div class="wrapper">
    <div class="get">
        <p id="p1" > <b>BlaTech</b><br>We Bring The Tech To Blater!</p>
        <p id="p2"><button><a target="_blank" href="https://www.google.com/search?q=fakultas%20teknik%20unsoed&rlz=1C1VDKB_enID1027ID1027&sxsrf=ALiCzsbZ-sLA6paxEQWlX8gcfJfjB2pnzA:1669708517354&ei=4bqFY4jIN4-uz7sPgYqh8Ao&ved=2ahUKEwiPjrj49NL7AhV5ILcAHb0bDccQvS56BAgjEAE&uact=5&oq=fakultas+teknik+unsoed&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzIICAAQgAQQywEyBQgAEIAEMgUIABCABDIOCC4QgAQQxwEQrwEQywEyBggAEBYQHjIGCAAQFhAeMgYIABAWEB4yBggAEBYQHjIGCAAQFhAeMgYIABAWEB46CggAEEcQ1gQQsAM6BwgAELADEEM6DQgAEOQCENYEELADGAE6DAguEMgDELADEEMYAjoSCC4QxwEQrwEQyAMQsAMQQxgCOg8ILhDUAhDIAxCwAxBDGAI6BAgAEEM6BAguEEM6CgguEMcBEK8BEEM6CwguEIAEEMcBEK8BOgUILhCABEoECEEYAEoECEYYAVDGAljxCmC7C2gBcAF4AIABmAGIAdAFkgEDMS41mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz-serp&tbs=lf:1,lf_ui:2&tbm=lcl&rflfq=1&num=10&rldimm=12606058844528550128&lqi=ChZmYWt1bHRhcyB0ZWtuaWsgdW5zb2VkSMCSzO_6lYCACFoqEAAQARgAGAEYAiIWZmFrdWx0YXMgdGVrbmlrIHVuc29lZCoGCAIQABABkgEVdW5pdmVyc2l0eV9kZXBhcnRtZW50&sa=X&rlst=f#rlfi=hd:;si:12606058844528550128,l,ChZmYWt1bHRhcyB0ZWtuaWsgdW5zb2VkSMCSzO_6lYCACFoqEAAQARgAGAEYAiIWZmFrdWx0YXMgdGVrbmlrIHVuc29lZCoGCAIQABABkgEVdW5pdmVyc2l0eV9kZXBhcnRtZW50;mv:[[-7.4285981,109.33763],[-7.4299303000000005,109.33626059999999]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2">Find Us!</a></button></p>
    </div>
<form name="form" method="post">

<img src="./assets/logo.png"  width="200px" height="200px" style=" display: block; margin-left: auto;margin-right: auto;" >
<table align="center" border="0">
    <tr>
		<td><p>Katakan Semua Tentangmu! : </p></td>
	</tr>
	<tr>
		<td><textarea name="bio" id="bio" style="resize: none; width: 400px; height: 100px;" class="signup2" ></textarea>
	</tr>
    </br>
    <tr>
		<td><p>Upload Foto Terbaikmu! : </p></td>
	</tr>
    <tr>
	<tr>
		<td><input name='file' type='file' class="signup2"></td>
	</tr>
	<br>
    <tr>
		<td><input name='signup' type='submit' value='Sign Up!' align="center" style="border: 2px solid black;
  border-radius: 10px 10px;"> | <input type="button" onclick="location.href='index.php';" value="Lewati" style="border: 2px solid black;
  border-radius: 10px 10px;"/>
	</tr>
</table>
</form>
</body>
</html>