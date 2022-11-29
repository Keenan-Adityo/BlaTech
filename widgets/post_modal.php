<?php
include "./connect.php";
function postModal($id, $name, $pfp, $post, $description) {
    global $conn;
    $commentQ = mysqli_query($conn, "select * from comment where id_feedpost = '$id'");
    
    echo "
    <div class='modal fade modal-xl' id='comment_". $id. "' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
      <div class='modal-dialog modal-dialog-centered'>
          <div class='modal-content'>
          <div class='modal-body'>
              <div class='d-flex flex-row'>
                  <div class='p-2'>
                      <img src='assets/feed_post/" . $post . "' width='500' height'500'>
                  </div>  
                  <div class='p-2 flex-fill'>
                      <div class='d-flex flex-column'>
                          <div class='d-flex flex-row'>
                              <div class='p-2'>
                                  <img src='assets/profile_picture/".  $pfp . "' alt='avatar' class='avatar' style='width: 25px; height: 25px;'>
                              </div>
                              <div class='p-2 flex-fill'>".  $name .  "</div>
                              <div class='p-2'><button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button></div>
                          </div>
                          <div style='overflow-y: scroll; height:350px;'>
                           ";
                            while($comment = mysqli_fetch_array($commentQ)) {
                                commentCard($comment['id_user'], $comment['comment']);
                            } 
                            echo " 
                          </div>
                          <div class='p-2'>
                              <div class='d-flex flex-row'>
                                  <div class='p-2'><i class='bi bi-heart'></i></div>
                                  <div class='p-2'>
                                      <i class='bi bi-chat'>
                                      </i>
                                  </div>
                              </div>
                          </div>
                          <div class='p-2'>
                              <input type='text' name='komen'>
                              <input type='submit' value='comment'>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          </div>
      </div>
  </div>";
}

function commentCard($id, $comment) {
    global $conn;
    $userQuery = mysqli_query($conn, "select * from user where id = '$id'");
    $user = mysqli_fetch_array($userQuery);
     
    echo "<p><b>". $user['username'] . "</b> $comment</p>";
}
?>