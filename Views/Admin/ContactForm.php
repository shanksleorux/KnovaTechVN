<div class="page-header row no-gutters py-4">
  <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
    <span class="text-uppercase page-subtitle">Overview</span>
    <h3 class="page-title">Message From Users</h3><hr/>
  </div>
</div>

<div class="row">
  <div class="col">
    <div class="card card-small mb-4">
      <div class="card-header border-bottom">
        <h6 class="m-0">List of Message</h6>
      </div>
      <div class="card-body p-0 pb-3 text-center">
        <table class="table mb-0">
          <thead class="bg-light">
            <tr>
              <th scope="col" class="border-0">#</th>
              <th scope="col" class="border-0">Message From</th>
              <th scope="col" class="border-0">Email</th>
              <th scope="col" class="border-0">Phone</th>
              <th scope="col" class="border-0">Company</th>
              <th scope="col" class="border-0">Subject</th>
              <th scope="col" class="border-0">Message</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($viewmodel as $items) : ?>
            <tr>
              <td><?php echo $items['MessID']; ?></td>
              <td><?php echo $items['MessName']; ?></td>
              <td><?php echo $items['MessEmail']; ?></td>
              <td><?php echo $items['MessPhone']; ?></td>
              <td><?php echo $items['MessCompany']; ?></td>
              <td><?php echo $items['MessSubject']; ?></td>
              <td><?php echo $items['MessContent']; ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
