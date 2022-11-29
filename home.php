<?php 
    session_start();
    include 'widgets/navigation.php';
    include 'widgets/post_card.php';
    include 'isLogged.php';
    include 'connect.php';
    $id = $_SESSION['id'];
    $userQuery = mysqli_query($conn, "select * from user where id = '$id'");
    $user = mysqli_fetch_array($userQuery);
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
                        postCard($feed['id_feedpost'], $o_user['nama'], $o_user['foto'], $feed['foto_feedpost'], $feed['description']);
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
                <p class='kGrey'>Suggestions For You</p>
            </div>
            <?php
                $counter = 0;
                $suggestQ = mysqli_query($conn, "select * from user");
                while($suggest = mysqli_fetch_array($suggestQ)) {
                    if($counter == 5) break;
                    $followQuery = mysqli_query($conn, "select * from follow where id_user = '$id' and id_follow='". $suggest['id'] ."'");
                    if(!$follow = mysqli_fetch_array($followQuery)) {
                        $counter++;
                        echo "<div class='d-flex flex-row align-items-center'>
                            <div class='p-2'>
                                <img src='assets/profile_picture/" . $suggest['foto'] . "' alt='avatar' class='avatar' style='width: 40px;height: 40px;'>
                            </div>
                            <div class='p-2'>
                            <table>
                                <tr>
                                    <td>
                                        <b>" . $suggest['username'] . "</b> <br>
                                    </td>
                                    <td rowspan='2'>
                                        <div class='suggestf'>Follow</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class='suggestfn'>" . $suggest['nama'] . "</div>     
                                    </td>
                                </tr>
                            </table>
                            </div>
                        </div>";
                    } 
                   
                    
                }
            ?>
        </div>
    </div>        
</body>
</html>