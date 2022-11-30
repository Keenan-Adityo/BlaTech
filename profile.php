<?php
session_start();
ob_start();
include 'connect.php';
include 'isloggin.php';
include 'connect.php';
include 'widgets/navigation.php';
include 'widgets/post_card.php';
include 'widgets/create_post_modal.php';

$id = $_SESSION['id'];
    $sql ="select * from user where id = '$id'";
	$query = mysqli_query($conn,$sql);
    $user = mysqli_fetch_array($query);
    $followQuery = mysqli_query($conn, "select * from follow where id_follow = '$id'");
    while($follow = mysqli_fetch_array($followQuery)) {
      $id_follow = $follow['id_follow'];
    }

    $followingya = mysqli_query($conn, "select count(*) from follow where id_user = '$id'");
    $following = mysqli_fetch_array($followingya);

    $followerya = mysqli_query($conn, "select count(*) from follow where id_follow = '$id'");
    $follower = mysqli_fetch_array($followerya);

    $postannya = mysqli_query($conn, "select count(*) from feedpost where id_user = '$id'");
    $postnih = mysqli_fetch_array($postannya);
?>

<link rel="stylesheet" href="profile.css">
<!-- Boostrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


<body>
<div class="bagianprofile">
            <div class="bagianatas d-flex">
              <div class="bagianfoto">
                    <?PHP echo"<img src= 'assets/profile_picture/" ; echo $user['foto'];  echo "'class='avatar' width='200px' height='200px' >"?>
              </div>
              <section class="palingatas">
                  
                <?php
                $ini = mysqli_query($conn, "select * from user where id = '$id'");
                if($userini = mysqli_fetch_array($ini)){
                  ?>
                    <div class="editprofile" style="display:flex;">
                    <h2 class="usernamenyaini" style="margin-right: 50px;"><?php echo $user['username']?></h2>
                    <button class="edit"><a class="kangedit" href="editprofile.php" style="text-decoration: none; color:black;">Edit Profile</a></button>
                  </div>
                <?PHP
                }else{
                  $idorang = $_GET['id'];
                  $follow = mysqli_query($conn,"select * from user where id = $idorang");
                  ?>
                  <div class='follow d-flex pt-1'>
                    <h2><?PHP ?></h2>
                  <button type='button' class='follow btn-primary flex-grow-1'>Follow</button>
                </div>
                  <?PHP                   
                }
                ?>
                <ul class="bagianfollowerpost d-flex">
                  <li class="postutama">
                    <div class="post2">
                      <span class="post"> <?PHP echo "$postnih[0]"?> <span>Post 
                      </div>
                  </li>
                  <li class="followingutama">
                    <div class="following2">
                      <span class="following"> <?PHP echo"$following[0]" ?> <span>Following 
                    </div>
                  </li>
                  <li class="followersutama">
                    <div class="followers2">
                      <span class="followers"> <?PHP echo"$follower[0]" ?> <span>Follower 
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
              .bagianprofile{
                align-items: center
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
              
              .avatar {
              width: 200px;
              height: 200px;
              vertical-align: middle;
              border-radius: 50%;
              }
              .edit {
              font-size: 14px;
              font-weight: bold;
              vertical-align: middle;
              border-radius: 10%;
                }
              
                body{
                margin-left: auto;
                padding-left: 300px;
                text-decoration: none;
                }
                
                .postingan{
                  width: 300px; 
                  height: 300px;
                  padding-bottom:30px ;
                }   
            </style>
          
    <div class="container text-center">
        <div class="row row-cols-auto">
            <?php

            $sql3= "select*from feedpost where id_user=$id";
            $query = mysqli_query($conn, $sql3);
            while($hasilpost = mysqli_fetch_array ($query)){
            echo"<img src= 'assets/feed_post/" ; echo $hasilpost['foto_feedpost'];  echo "'class='postingan' >";
            }
            ?>
            
            </div >

    </div>
</div>
            </div>

</BODy>

