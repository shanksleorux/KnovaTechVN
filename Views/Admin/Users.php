      <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">User Status</h3><hr/>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Dark Table -->
            <div class="row">
              <div class="col">
                <div class="card card-small overflow-hidden mb-4">
                  <div class="card-header bg-dark">
                    <h6 class="m-0 text-white">Admin table</h6>
                  </div>
                  <div class="card-body p-0 pb-3 bg-blue text-center">
                    <table class="table table-dark mb-0">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col" class="border-bottom-0">#</th>
                          <th scope="col" class="border-bottom-0">First Name</th>
                          <th scope="col" class="border-bottom-0">Last Name</th>
                          <th scope="col" class="border-bottom-0">Email</th>
                          <th scope="col" class="border-bottom-0">Permission</th>
                          <th scope="col" class="border-bottom-0">Active</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($viewmodel as $items) : ?>
                        <tr>
                          <td><?php echo $items['AdID']; ?></td>
                          <td><?php echo $items['AdFirstName']; ?></td>
                          <td><?php echo $items['AdLastName']; ?></td>
                          <td><?php echo $items['AdEmail']; ?></td>
                          <td>Admin</td>
                          <td><?php
                            if ($items['AdActive'] == 1) {
                              echo "Active";
                            }else {
                              echo "In-Active";
                            }
                          ?></td>
                        </tr>
                      <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <button type="button" class="mb-2 btn btn-outline-primary mr-2"><a href="<?php echo ROOT_URL."Admin/MangeUsers/CreateAdmin" ?>">Create New</a></button>
                <button type="button" class="mb-2 btn btn-outline-secondary mr-2">Delete</button>
              </div>
            </div>
            <!-- End Default Dark Table -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Active Users</h6>
                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">#</th>
                          <th scope="col" class="border-0">First Name</th>
                          <th scope="col" class="border-0">Last Name</th>
                          <th scope="col" class="border-0">Email</th>
                          <th scope="col" class="border-0">Company</th>
                          <th scope="col" class="border-0">Job Title</th>
                          <th scope="col" class="border-0">Phone</th>
                          <th scope="col" class="border-0">Permission</th>
                          <th scope="col" class="border-0">Active</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Ali</td>
                          <td>Kerry</td>
                          <td>Russian Federation</td>
                          <td>GdaÅ„sk</td>
                          <td>107-0339</td>
                          <td>107-0339</td>
                          <td>107-0339</td>
                          <td>107-0339</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Default Light Table -->
            <div class="row">
              <div class="col">
                <button type="button" class="mb-2 btn btn-outline-primary mr-2">Create New</button>
                <button type="button" class="mb-2 btn btn-outline-secondary mr-2">Delete</button>
              </div>
            </div>
          </div>
