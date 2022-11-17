<?php
session_start();
include 'connect.php';

$id = $_SESSION['id'];

$sql = "select * from user where id='$id'";
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
                    <p class="aboutme1"><?php $row['bio']?></p>
                </div>
            </header>

            <td><?PHP echo"<img src='$row[foto]' width='300' height='200'>"?></td>
</div>
	

