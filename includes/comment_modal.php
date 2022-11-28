<!-- Modal -->
<div class="modal fade" id="comment" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

<div class='card' style='max-width: 35rem;'>  
                            <div class='card-header'>
                            <div class='d-flex flex-row'>
                                <div class='p-2'>
                                     <img src='assets/profile_picture/".  $o_user['foto']. "' alt='avatar' class='avatar' style='width: 25px; height: 25px;'>
                                </div>
                                <div class='p-2 flex-fill'>".  $o_user['nama'].  "</div>
                                </div>
                            </div>
                            <div class='card-body'>
                            </div>
                            <div class='card-footer'>
                                <div class='d-flex flex-column'>
                                    <div class='d-flex flex-row'>
                                        <div class='p-2'><i class='bi bi-heart'></i></div>
                                        <div class='p-2'>
                                            <i class='bi bi-chat'>
                                            </i>
                                        </div>
                                    </div>
                                    <p><b>".  $o_user['username'].  "</b> ".  $feed['description'].  "</p>
                                </div>
                            </div>
                        </div>