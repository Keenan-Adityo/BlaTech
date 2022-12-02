<?php
include "./connect.php";
session_start();
$username = $_SESSION['username'];
function postModal($id, $name, $pfp, $post, $description) {
    global $conn;
    $commentQ = mysqli_query($conn, "select * from comment where id_feedpost = '$id'");
    // $comment = array(mysqli_fetch_array($commentQ));
    $commentArr = array();
    while($comment = mysqli_fetch_assoc($commentQ)) {
        $commentArr[] = $comment;
    } 
?>
    <div class='modal fade modal-xl' id='comment_<?= $id?>' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
      <div class='modal-dialog modal-dialog-centered'>
          <div class='modal-content'>
          <div class='modal-body' style="background-color: #fafafa;">
              <div class='d-flex flex-row'>
                  <div class='p-2'>
                      <img src='assets/feed_post/<?= $post ?>' width='500' height'500'>
                  </div>  
                  <div class='p-2 flex-fill' >
                      <div class='d-flex flex-column'>
                          <div class='d-flex flex-row'>
                              <div class='p-2'>
                                  <img src='assets/profile_picture/<?=  $pfp ?>' alt='avatar' class='avatar' style='width: 25px; height: 25px;'>
                              </div>
                              <div class='p-2 flex-fill'><?=  $name ?></div>
                              <div class='p-2'><button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button></div>
                          </div>
                          <div class="border border-success p-2 mb-2 border-opacity-10" style="background-color: white;">
                          <div class="commentSection" style="overflow-y: scroll; height:350px; border='1'">
                          <table id="tbl_<?=$id?>"></table>
                          <p><b><?= $name ?></b> <?= $description ?></p>
                          <?php
                          echo $user_username;
                            foreach($commentArr as $value) {
                                commentCard($value['id_user'], $value['comment']);  
                            }
                            ?>
                          </div>
                        </div>
                          <div class='p-2'>
                              <div class='d-flex flex-row'>
                                <div class='p-2'>
                                    <button type='button' class='btn btn-light'>
                                        <i class='bi bi-heart'></i>
                                    </button>
                                </div>
                                  <div class='p-2'>
                                    <button type='button' class='btn btn-light'>
                                      <i class='bi bi-chat'>
                                      </i>
                                    </button>
                                  </div>
                              </div>
                          </div>
                          <form name="form" onsubmit="comment(event, <?=$id?>, <?= $username?>)" >
                              <div class='p-2'>
                                  <input type='text' id="komen_<?=$id?>" name='komen' class="form-control mb-2" placeholder="Add a comment...">
                              </div>
                                <input type='submit' value='comment' class="btn btn-primary float-right" >
                          </form>
                      </div>
                  </div>
              </div>
          </div>
          </div>
      </div>
  </div><?php
}

function commentCard($id, $comment) {
    global $conn;
    $userQuery = mysqli_query($conn, "select * from user where id = '$id'");
    $user = mysqli_fetch_array($userQuery);
     
    ?><p><b><?= $user['username'] ?></b> <?= $comment ?></p>
    <?php
}
?>