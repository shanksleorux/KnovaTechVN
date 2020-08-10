
          <!-- / .main-navbar -->
          <?php if(isset($_SESSION['is_update_Success'])) : ?>
          <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">OK</span>
            </button>
            <i class="fa fa-check mx-2"></i>
            <strong>Success!</strong> Your profile has been updated! </div>
          <?php endif ?>
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">User Profile</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                    <h4 class="mb-0"><?php echo $_SESSION['user_data']['name'] . ' ' .$_SESSION['user_data']['lastName']; ?></h4>
                    <span class="text-muted d-block mb-2">Admin</span>
                    <button type="button" class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2">
                      <i class="material-icons mr-1">person_add</i>Follow</button>
                  </div>
                  <ul class="list-group list-group-flush">

                    <li class="list-group-item p-4">
                      <strong class="text-muted d-block mb-2">Description</strong>
                      <span><?php echo $_SESSION['user_data']['description'] ?></span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Account Details</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form method="post" action="">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feFirstName">First Name</label>
                                <input type="text" class="form-control" id="feFirstName" name="feFirstName" placeholder="First Name" value="<?php echo $_SESSION['user_data']['name'] ?>"> </div>
                              <div class="form-group col-md-6">
                                <label for="feLastName">Last Name</label>
                                <input type="text" name="feLastName" class="form-control" id="feLastName" placeholder="Last Name" value="<?php echo $_SESSION['user_data']['lastName'] ?>"> </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feEmailAddress">Email</label>
                                <input type="email" name="feEmailAddress" class="form-control" id="feEmailAddress" placeholder="Email" value="<?php echo $_SESSION['user_data']['email'] ?>"> </div>
                              <div class="form-group col-md-6">
                                <label for="fePassword">Update Password</label>
                                <input type="password" class="form-control" id="fePassword" name="fePassword" placeholder="Password"> </div>
                            </div>

                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="feDescription">Description</label>
                                <textarea class="form-control" name="feDescription" rows="5"><?php echo $_SESSION['user_data']['description'] ?></textarea>
                              </div>
                            </div>
                            <input type="submit" name="submit" class="btn btn-accent" value="Update Account"></input>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
