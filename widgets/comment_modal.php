<?php
function commentModal($id, $name, $pfp, $post, $description) {
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
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          </div>
      </div>
  </div>";
}
?>