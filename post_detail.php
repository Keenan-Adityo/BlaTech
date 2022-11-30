<div class='d-flex flex-row'>
                  <div class='p-2'>
                      <img src='assets/feed_post/<?= $post ?>' width='500' height'500'>
                  </div>  
                  <div class='p-2 flex-fill'>
                      <div class='d-flex flex-column'>
                          <div class='d-flex flex-row'>
                              <div class='p-2'>
                                  <img src='assets/profile_picture/<?=  $pfp ?>' alt='avatar' class='avatar' style='width: 25px; height: 25px;'>
                              </div>
                              <div class='p-2 flex-fill'><?=  $name ?></div>
                              <div class='p-2'><button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button></div>
                          </div>
                          <div class="border border-success p-2 mb-2 border-opacity-10">
                          <div class="commentSection" style='overflow-y: scroll; height:350px; border='1'>
                          <?php
                            foreach($commentArr as $value) {
                                commentCard($value['id_user'], $value['comment']);  
                            }
                            
                            ?>
                          </div>
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