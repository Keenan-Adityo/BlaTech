<?php
session_start();
ob_start();
include 'connect.php';
include 'isloggin.php';
include 'connect.php';
include 'widgets/navigation.php';
$id = $_SESSION['id'];
    $sql ="select * from user where id = '$id'";
	$query = mysqli_query($conn,$sql);
    $user = mysqli_fetch_array($query);
    $followQuery = mysqli_query($conn, "select * from follow where id_follow = '$id'");
    while($follow = mysqli_fetch_array($followQuery)) {
      $id_follow = $follow['id_follow'];
    }
?>
<link rel="stylesheet" href="profile.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


<body>
<div class="bagianprofile">
            <div class="bagianatas d-flex">
              <div class="bagianfoto">
                    <?PHP echo"<img src= 'assets/profile_picture/" ; echo $user['foto'];  echo "' width='200px' height='200px' >"?>
              </div>
              <section class="palingatas">
                  
                <?php
                $ini = mysqli_query($conn, "select * from user where id = '$id'");
                if($userini = mysqli_fetch_array($ini)){
                  ?>
                    <div class="editprofile" style="display:flex;">
                    <h2 class="usernamenyaini" style="margin-right: 50px;"><?php echo $user['username']?></h2>
                    <button class="edit" style="border-radius=50px"><a class="kangedit" href="editprofile.php" style="text-decoration: none; color:black;">Edit Profile</a></button>
                  </div>
                <?PHP
                }else{
                  ?>
                  <div class='follow d-flex pt-1'>
                  <button type='button' class='follow btn-primary flex-grow-1'>Follow</button>
                </div>
                  <?PHP                   
                }
                ?>
                <ul class="bagianfollowerpost d-flex">
                  <li class="postutama">
                    <div class="post2">
                      <span class="post"> 4 <span>Post 
                      </div>
                  </li>
                  <li class="followingutama">
                    <div class="following2">
                      <span class="following"> 4 <span>Following 
                    </div>
                  </li>
                  <li class="followersutama">
                    <div class="followers2">
                      <span class="followers"> 4 <span>Follower 
                    </div>
                    </li>
                </ul>
                <br>
                <div>
                <span class="mb-1 pb-0" style="color: #2b2a2a;"><?php echo $user["nama"]; ?></span>
                </div>
                <br>
                <p class="mb-2 pb-1" style="color: #2b2a2a;"><?php echo $user["bio"]; ?></p>
              </section>
            </div>
            <style>
              .bagianfoto{
                margin-bottom: 50px;
                border-radius: 50px;
              }
              

              ul {
                list-style-type: none;
                margin: 0;
               padding: 0;
              }

              .bagianfollowerpost{
                font-weight: 600;
              }

              li{
                margin-right: 40px;
              }

              
            </style>
          
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

