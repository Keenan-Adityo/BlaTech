<?php
include "comment_modal.php";
include "./connect.php";

function commentCard($id, $name, $pfp, $post, $description) {
    global $conn;
    $commCountQ = mysqli_query($conn, "select count(*) from comment where id_feedpost = '$id'");
    $commCount = mysqli_fetch_array($commCountQ);
    $count = $commCount['COUNT(*)'];
    echo "
    <div class='card' style='max-width: 35rem;'>  
        <div class='card-header'>
            <div class='d-flex flex-row'>
                <div class='p-2'>
                    <img src='assets/profile_picture/".  $pfp . "' alt='avatar' class='avatar' style='width: 25px; height: 25px;'>
                </div>
                <div class='p-2 flex-fill'>".  $name.  "</div>
            </div>
        </div>
        <div class='card-body'>
            <img src='assets/feed_post/".  $post.  "' alt='blatech' class='card-img'>  
        </div>
        <div class='card-footer'>
            <div class='d-flex flex-column'>
                <div class='d-flex flex-row'>
                    <div class='p-2'>
                        <button type='button' class='btn'>
                            <i class='bi bi-heart'></i>
                    </button>
                    </div>
                    <div class='p-2'>
                        <button type='button' class='btn' data-bs-toggle='modal' data-bs-target='#comment_". $id. "'>
                            <i class='bi bi-chat'>
                            </i>
                        </button>
                        ". commentModal($id, $name, $pfp, $post, $description) ."
                    </div>
                </div>
                <p><b>".  $name .  "</b> ".  $description .  "</p>
                <p>View all ". $commCount[0] ." comments</p>
                <p><b>username</b> 1 top komen</p>
            </div>
        </div>
    </div>";
    }
?>