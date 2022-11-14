<?php
session_start();
include 'connect.php';

$_SESSION['username'] = $row['username'];
$sql = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
$query = mysqli_query($conn,$sql);
    if($row=mysqli_fetch_array($query)){
    echo"<tr>
        <td>$row[id]</td>
        <td>$row[username]</td>
        <td>$row[aboutme]</td>
        <td>$row[bio]</td>
        <td>
    </tr>";
    }else{}
?>

<div class="kotakan">
            <header class="profile">
                <div class="hero">
                    <h1 class="username"><?php echo $_SESSION['username']?></h1>
                </div>
                <div class="features feature-1">
                    <h4 class="price">Dexazor Esport</h4>
                    <p class="item">Pro Player</p>
                </div>
                <div class="features feature-2">
                <h4 class="price">HMIF</h4>
                <p class="item">PSDM</p>
                </div>
            </header>
</div>
	

