<?php
     require_once '../../inc/header.php';
     require_once '.././sidenav/sidenav.php';
     require_once '../../inc/config.php';
     require_once '../../inc/session.php';
?>
<div class="wrap d-flex align-items-center justify-content-center">

<div class="card w-75 mt-5">
  <div class="card-header d-flex justify-content-between">
    <h4 class="text-dark p-2">Expired Medicine</h4>

    <div class="input-group">
  <div class="input-group-prepend mt-4">
    <span class="input-group-text me-3" >Medicine expired FROM - TO</span>
  </div>
  <form action="expiredMedicine.php" method="POST" class="d-flex mt-4 h-50">
  <input type="date" class="form-control p-1 me-3" name="firstdate">
  <input type="date" class="form-control p-1 me-3" name="seconddate">
  <input type="submit"  class="btn btn-success btn-md" name="submit">
  </form>
</div>
  </div>
  <div class="card-body">
    <?php require_once 'expiredMedSearch.php';?>
    <div class="table-responsive">
        <table class="table table-hover" id="xpmed">
        <thead class="thead-dark">
          <tr>
            <th scope="col">id</th>
            <th scope="col">Brand Name</th>
            <th scope="col">Unit</th>
            <th scope="col">Quantity</th>
            <th scope="col">Expired On</th>
          </tr>
        </thead>
        <tbody>
          <?php require_once 'expiredData.php';?>
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