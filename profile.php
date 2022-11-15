<?php
session_start();
include 'connect.php';

$_SESSION['username'] = $row['username'];
$_SESSION['password'] = $row['password'];
$_SESSION['foto'] = $row['foto'];
$filegambar = $row['foto'];
$sql = "select * from user";
$query = mysqli_query($conn,$sql);
    if($row=mysqli_fetch_array($query)){
        
    }else{}
?>

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
                    <p class="aboutme1"><?php $sql="SELECT * from user where aboutme="?></p>
                </div>
            </header>

            <td><?PHP echo"<img src='$row[foto]' width='300' height='200'>"
            ?></td>
</div>
	

