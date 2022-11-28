<?php
session_start();
include 'connect.php';
include 'isloggin.php';
include 'connect.php';
include 'widgets/navigation.php';
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
              <section class="palingatas">
                  <h2 class="usernamenyaini"><?php echo $user['username']?></h2>
                <?php
                $ini = mysqli_query($conn, "select * from user where id = '$id'");
                if($userini = mysqli_fetch_array($ini)){
                  ?>
                    <div class="editprofile" style="flex: 1 0 auto";>
                    <button class="edit"><a class="kangedit" href="editprofile.php" style="text-decoration: none; color:black;">Edit Profile</a></button>
                  </div>
                <?PHP
                }else{
                  ?>
                  <div class='follow d-flex pt-1'>
                  <button type='button' class='follow btn-primary flex-grow-1'>Follow</button>
                </div>";
                  <?PHP                   
                }
                ?>
                <ul class="d-flex">
                  <li class="px-4">
                    <div class="post">
                      <span class="bagianfollowerpost"> 4 <span>Post
                      </div>
                  </li>
                  <li>
                    <div class="following">4 Following</div>
                  </li>
                  <li class="px-4">
                    <div class="followers"> 9 Followers</div>
                    </li>
                </ul>
                <p class="mb-1 pb-0" style="color: #2b2a2a;"><?php echo $user["nama"]; ?></p>
                <p class="mb-2 pb-1" style="color: #2b2a2a;"><?php echo $user["bio"]; ?></p>
              </section>
            </div>
            <style>
              .bagianfoto{
                margin-bottom: 50px
              }
              .row{
                align
              }

              ul {
                list-style-type: none;
                margin: 0;
               padding: 0;
              }

              .bagianfollowerfoto{
                font-weight: 600;
              }
              .post{
                display: block;
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

