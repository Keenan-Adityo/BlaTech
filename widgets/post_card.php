<?php
include "post_modal.php";
include "./connect.php";

function postCard($id, $name, $pfp, $post, $description) {
    global $conn;
    $commCountQ = mysqli_query($conn, "select count(*) from comment where id_feedpost = '$id'");
    $commCount = mysqli_fetch_array($commCountQ);
   ?>
    <div class='card' style='max-width: 35rem;'>  
        <div class='card-header'>
            <div class='d-flex flex-row'>
                <div class='p-2'>
                    <img src='assets/profile_picture/<?=  $pfp ?>' alt='avatar' class='avatar' style='width: 25px; height: 25px;'>
                </div>
                <div class='p-2 flex-fill'><a href='./profile.php' class='hrefblack'><b> <?=  $name ?></b></a></div>
            </div>
        </div>
        <div class='card-body'>
            <img src='assets/feed_post/<?=  $post ?>' alt='blatech' class='card-img'>  
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
                        <button type='button' class='btn' data-bs-toggle='modal' data-bs-target='#comment_<?= $id ?>'>
                            <i class='bi bi-chat'>
                            </i>
                        </button>
                        <?php postModal($id, $name, $pfp, $post, $description); ?>
                    </div>
                </div>
                <p><b><?=  $name ?></b> <?=  $description ?></p>
                <p><button type='button' class='btn text-start' data-bs-toggle='modal' data-bs-target='#comment_<?= $id ?>'>
                    View all <?= $commCount[0] ?> comments
                </button></p>
            </div>
        </div>
    </div>
    <?php
    }
?>