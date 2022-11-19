<?php
session_start();
include 'connect.php';
include 'isloggin.php';
include 'connect.php';
include 'includes/navigation.php';
$id = $_SESSION['id'];
    $sql ="select * from user where id = '$id'";
	$query = mysqli_query($conn,$sql);
    $user = mysqli_fetch_array($query);
?>
<link rel="stylesheet" href="profile.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


<body>
<div class="row">
            <div class="bagianatas d-flex">
              <div class="bagianfoto">
                    <?PHP echo"<img src= 'assets/profile_picture/"; echo $user['foto'];  echo "' width='200' height='200'>"?>
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="mb-1"><?php echo $user['username']?></h5>
                <div class="d-flex  "
                  style="background-color: #efefef;">
                  <div class="px-4">
                    <p class="following mb-1">4 Post</p>
                  </div>
                  <div>
                    <p class="following mb-1">4 Following</p>
                  </div>
                  <div class="px-4">
                    <p class="followers mb-1"> 9 Followers</p>
                    </div>
                </div>
                <p class="mb-1 pb-0" style="color: #2b2a2a;"><?php echo $user["nama"]; ?></p>
                <p class="mb-2 pb-1" style="color: #2b2a2a;"><?php echo $user["bio"]; ?></p>
                <?php
                $ini = mysqli_query($conn, "select * from user where id = '$id'");
                if($usernini = mysqli_fetch_array($ini)){
                    echo"<div class='editprofile d-flex pt-1'>
                    <button type='button' class='edit btn-primary flex-grow-1'>Edit Profile</button>
                  </div>";
                
                }else{
                    echo"
                    <div class='follow d-flex pt-1'>
                  <button type='button' class='follow btn-primary flex-grow-1'>Follow</button>
                </div>";
                    
                }
                ?>
              </div>
            </div>
          
    <div class="container text-center">
        <div class="row row-cols-auto">
            <div class="col"><td><?PHP echo"<img src= 'assets/post/"; echo $user['post'];  echo "' width='300' height='200'>"?></td></div>
            <div class="col"><td><?PHP echo"<img src= 'assets/post/"; echo $user['post'];  echo "' width='300' height='200'>"?></td></div>
            <div class="col"><td><?PHP echo"<img src= 'assets/post/"; echo $user['post'];  echo "' width='300' height='200'>"?></td></div>
            <div class="col"><td><?PHP echo"<img src= 'assets/post/"; echo $user['post'];  echo "' width='300' height='200'>"?></td></div>
            </div>
    </div>
</div>
            </div>

</BODy>

