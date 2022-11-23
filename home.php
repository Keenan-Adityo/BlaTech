<?php 
    session_start();
    include 'includes/navigation.php';
    include 'includes/comment_modal.php';
    include 'isLogged.php';
    include 'connect.php';
    $id = $_SESSION['id'];
    $userQuery = mysqli_query($conn, "select * from user where id = '$id'");
    $user = mysqli_fetch_array($userQuery);
    // cek follow
    
    // cek postnya follow tampilin

?>

<html lang="en">
<head>
    <title>Blatech</title>
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <!-- Button trigger modal -->


    <div class="row">
        <div class="col">
        
            <?php
            
                $followQuery = mysqli_query($conn, "select * from follow where id_user = '$id'");
                while($follow = mysqli_fetch_array($followQuery)) {
                    $id_follow = $follow['id_follow'];
                    $o_userQuery = mysqli_query($conn, "select * from user where id = '$id_follow'");
                    $o_user = mysqli_fetch_array($o_userQuery);
                    $feedQuery = mysqli_query($conn, "select * from feedpost where id_user = '$id_follow'");
                    while($feed = mysqli_fetch_array($feedQuery)) {
                        echo 
                        "
                        <div class='card' style='max-width: 35rem;'>  
                            <div class='card-body'>
                                <div class='d-flex flex-row'>
                                    <div class='p-2'>
                                        <img src='assets/profile_picture/".  $o_user['foto']. "' alt='avatar' class='avatar' style='width: 25px; height: 25px;'>
                                    </div>
                                    <div class='p-2 flex-fill'>".  $o_user['nama'].  "</div>
                                </div>
                                <img src='assets/feed_post/".  $feed['foto_feedpost'].  "' alt='blatech' class='card-img'>
                                <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>
                                    <i class='bi bi-chat'></i>
                                </button>
                                
                                </div>
                            <div class='card-footer'>
                            
                                <div class='d-flex flex-column'>
                                    <div class='d-flex flex-row'>
                                        <div class='p-2'><i class='bi bi-heart'></i></div>
                                        <div class='p-2'>
                                        
                                            <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>
                                                <i class='bi bi-chat'>
                                                </i>
                                            </button>
                                        
                                        </div>
                                    </div>
                                    <p><b>".  $o_user['username'].  "</b> ".  $feed['description'].  "</p>
                                    <p>View all 0 comments</p>
                                    <p><b>username</b> 1 top komen</p>
                                   
                                    
                                </div>
                            </div>
                        </div>";
                    }
                }
            ?>
            
        </div>
        <div class="col" id="home-right">
            <div class="d-flex flex-row align-items-center">
                <div class="p-2">
                    <img src= "assets/profile_picture/<?php echo $user["foto"]; ?>" alt="avatar" class="avatar" style="width: 60px;height: 60px;">
                </div>
                <div class="p-2">
                    <b><?php echo $user["username"]; ?></b> <br>
                    <?php echo $user["nama"]; ?>
                </div>
            </div>
            <div class="d-flex flex-row align-items-center">
                follower
            </div>
            <?php
                $followQuery = mysqli_query($conn, "select * from follow where id_follow = '$id'");
                while($follow = mysqli_fetch_array($followQuery)) {
                    $id_follower = $follow['id_user'];
                    $o_userQuery = mysqli_query($conn, "select * from user where id = '$id_follower'");
                    while($o_user = mysqli_fetch_array($o_userQuery)) {
                        echo "<div class='d-flex flex-row align-items-center'>
                            <div class='p-2'>
                                <img src='assets/profile_picture/"; echo $o_user['foto']; echo "' alt='avatar' class='avatar' style='width: 40px;height: 40px;'>
                            </div>
                            <div class='p-2'>
                                <b>"; echo $o_user['username']; echo "</b> <br>
                                "; echo $o_user['nama']; echo "    
                            </div>
                        </div>";
                    }
                    
                }
            ?>
            

        </div>
    </div>        
</body>
</html>