<h3>Edit or Delete a Post</h3> <hr/>
            <?php if(isset($_SESSION['is_Delete_Success'])) : ?>
            <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">OK</span>
              </button>
              <i class="fa fa-check mx-2"></i>
              <strong>Success!</strong> You have just delete an Article!
            </div> <hr/>
            <?php endif; ?>
            <div class="row">
              <?php foreach($viewmodel as $items) : ?>
              <div class="col-lg-4">
                <div class="card card-small card-post mb-4">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $items['PostTitle']; ?></h5>
                  </div>
                  <div class="card-footer border-top d-flex">
                    <div class="my-auto ml-auto">
                      <a class="btn btn-sm btn-white" href="<?php echo ROOT_URL.'Admin/EditPost/'.$items['ID']; ?>">
                        <i class="material-icons">edit</i> <span>Edit this post</span> </a>
                    </div>
                    <div class="my-auto ml-auto">
                      <a class="btn btn-sm btn-white" href="<?php echo ROOT_URL.'Admin/DeletePost/'.$items['ID']; ?>">
                        <i class="material-icons">error</i> <span>Delete this post</span> </a>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
