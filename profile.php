<?php
session_start();
include 'connect.php';

$id = $_SESSION['id'];
$sql = "select * from user where id='$id'";
$query = mysqli_query($conn,$sql);
    if($row=mysqli_fetch_array($query)){
        
    }else{}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<div class="bagianatas">
            <header class="profile">
                <div class="atas">
                    <p class="username"><?php echo $row['username']?></p>
                </div>
                <div class="Folowers">
                <p class="followers">Followers</p>

                <p class="following">Following</p>

                <p class="jumlahpost">Jumlah Post</p>

                </div>
                <div class="aboutme">
                    <p class="aboutme1"><?php $row['bio']?></p>
                </div>
            </header>
    <div class="container text-center">
        <div class="row row-cols-auto">
            <div class="col"><td><?PHP echo"<img src= 'assets/profile_picture/"; echo $row['foto'];  echo "' width='300' height='200'>"?></td></div>
            <div class="col"><td><?PHP echo"<img src= 'assets/profile_picture/"; echo $row['foto'];  echo "' width='300' height='200'>"?></td></div>
            <div class="col"><td><?PHP echo"<img src= 'assets/profile_picture/"; echo $row['foto'];  echo "' width='300' height='200'>"?></td></div>
            <div class="col"><td><?PHP echo"<img src= 'assets/profile_picture/"; echo $row['foto'];  echo "' width='300' height='200'>"?></td></div>
            </div>
    </div>
</div>
	

