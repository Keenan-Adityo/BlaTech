<?php
session_start();
include 'connect.php';

$_SESSION['username'] = $row['username'];
$_SESSION['password'] = $row['password'];
$sql = "SELECT * FROM user";
$query = mysqli_query($conn,$sql);
    if($row=mysqli_fetch_array($query)){
    echo "hai";
    }else{}
?>

<div class="kotakan">
            <header class="profile">
                <div class="atas">
                    <h1 class="username"><?php echo $row['username']?></h1>
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
</div>
	

