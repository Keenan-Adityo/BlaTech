<?php 
    session_start();
    include 'widgets/navigation.php';
    include 'widgets/post_card.php';
    include 'widgets/create_post_modal.php';
    include 'isLogged.php';
    include 'connect.php';
    $id = $_SESSION['id'];
    $userQuery = mysqli_query($conn, "select * from user where id = '$id'");
    $user = mysqli_fetch_array($userQuery);
    $username = $_SESSION['username'];
    // function follow($add) {
    //     $addFollow = mysqli_query($conn, "INSERT INTO `follow` (`id_user`, `id_follow`) VALUES ('$id', '$add')"); 
    // }
    
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
                $feedQuery = mysqli_query($conn, "select * from feedpost order by id_feedpost desc");
                
                while($feed = mysqli_fetch_array($feedQuery)) {
                    if($id == $feed['id_user']) {
                        postCard($feed['id_feedpost'], $user['username'], $user['foto'], $feed['foto_feedpost'], $feed['description'], );
                        continue;
                    }   
                    $followQuery = mysqli_query($conn, "select * from follow where id_user = '$id'");
                    while($follow = mysqli_fetch_array($followQuery)) {
                        
                        if($feed['id_user'] == $follow['id_follow']) {
                            $id_follow = $follow['id_follow'];
                            $o_userQuery = mysqli_query($conn, "select * from user where id = '$id_follow'");
                            $o_user = mysqli_fetch_array($o_userQuery);
                            postCard($feed['id_feedpost'], $o_user['username'], $o_user['foto'], $feed['foto_feedpost'], $feed['description']);
                        } 
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
                <p class='kGrey' id='tes'>Suggestions For You</p>
            </div>
            <?php
                $counter = 0;
                $suggestQ = mysqli_query($conn, "select * from user");
                while($suggest = mysqli_fetch_array($suggestQ)) {
                   
                    if($counter == 5) break;    
                    
                    $followQuery = mysqli_query($conn, "select * from follow where id_user = '$id' and id_follow='". $suggest['id'] ."'");
                    if(!$follow = mysqli_fetch_array($followQuery) and $id != $suggest['id']) {
                        $counter++; ?>
                        <div class="" style="width:300px">
                            <div class='d-flex flex-row justify-content-between'>
                                <div class='p-2'>
                                    <div class='d-flex '>
                                        <img class="avatar" src='assets/profile_picture/<?= $suggest['foto'] ?>' alt='avatar' class='avatar' style='width: 40px;height: 40px;margin-right:20px'>
                                        <div class='d-flex flex-column ml-10'>
                                                <b> <?= $suggest['username'] ?> </b> 
                                        <span class='kGrey'><?= $suggest['nama'] ?></span> 
                                    </div>
                                    </div>
                                </div>
                                <div class='p-2'>
                                     <!-- buttonnya bikin error -->
                                     <a href="follow.php?target=<?= $suggest['id'] ?>" target="_blank" ><button class="btn btn-light" onclick="follow('<?= $suggest['id'] ?>')"> <div id='foll<?=$suggest['id']?>' class="hrefblue">Follow</div> </button></a> 
                                </div>
                            </div>
                        </div>
                        <?php
                    } 
                }
                ?>
        </div>
    </div>  
    <script>
        function like(id) {
            if(document.getElementById("like_" + id).classList.contains('bi-heart')) {
                document.getElementById("like_" + id).classList.toggle('bi-suit-heart-fill');
            } else {
                document.getElementById("like_" + id).classList.toggle('bi-heart');
            }
        }

        function comment(e, id, username) {
                e.preventDefault();
                let table = document.getElementById("tbl_" + id);
                let row = table.insertRow(0);
                let comment = document.getElementById("komen_" + id).value;
                row.insertCell(0).innerHTML = "<p><b><?= $username ?></b> " + comment +"</p>";
            }
    </script> 
         </body>
</html>