<?php
$pfp = $_SESSION['pfp'];
?>
<link rel="stylesheet" href="style.css">
<div class="sidenav">
    <img src="assets/logo.png" alt="" class="logo">
    <a href="home.php" class="mb-2"><i class="bi bi-house-door"></i> Home</a>
    <a data-bs-toggle="modal" href="#create_post" role="button" class="mb-2"><i class="bi bi-plus-square"></i> Create</a>
    <a href="profile.php" class="mb-2"><img src='assets/profile_picture/<?=  $pfp ?>' alt='avatar' class='avatar' style='width: 25px; height: 25px;'> Profile</a>
    <a href="logout.php" class="mb-2"><i class="bi bi-box-arrow-left"></i> Log Out</a>
</div>
        
<!-- <i class="bi bi-house-door-fill"></i> -->
<!-- <i class="bi bi-plus-square-fill"></i> -->