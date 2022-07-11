<?php
     require_once '../../inc/header.php';
     require_once '.././sidenav/sidenav.php';
     require_once '../../inc/config.php';
     require_once '../../inc/session.php';
?>
<div class="wrapp d-flex justify-content-around px-5 mt-2">
<div class="card w-25 h-25">
  <div class="card-body">
  <form action="addmedCategory.php" method="POST">
    <div class="form-group p-3">
        <label for="medicineType" class="mb-2">Medicine Categories</label>
        <input type="text" class="form-control mb-4" name="medicineCategory" placeholder="add medicine Categories" required>
    </div>

    <div class="form-group d-block">
      <input type="submit" name ="md_submit" class="btn btn-success col-12"></input>
    </div>
</form>
  </div>
</div>

<!-- Medicine Type Data -->
<div class="card w-50">
        <div class="card-header d-flex justify-content-between align-items-end">
        </div>
        <div class="card-body">
          <div class="table-responsive">
                <table class="table table-sm table-bordered text-center" id="medCategory">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Medtype</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php require_once 'medicineCategoryData.php'?>
                </tbody>
              </table>
          </div>
      </div>
</div>

</div>
<?php 
require_once '../../inc/footer.php';
require_once '../../inc/popmsg.php';
?>