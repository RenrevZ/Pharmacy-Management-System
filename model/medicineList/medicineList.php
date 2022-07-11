<?php
     require_once '../../inc/header.php';
     require_once '.././sidenav/sidenav.php';
     require_once '../../inc/config.php';
     require_once '../../inc/session.php';
     require_once 'medADDlist.php'; 
?>

<div class="wrapp d-flex flex-column justify-content-center px-5 mt-2">

<div class="card">

<div class="card-header  p-3 d-flex justify-content-between align-items-center">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">
  <i class="fa-solid fa-plus"></i> Add medicine
</button>

</div>
  <div class="card-body">
  <div class="table-responsive">
      <table class="table  table-sm table-bordered text-center" id="Medicinelist">
      <thead>
        <tr> 
          <th scope="col">Product ID</th>
            <th scope="col">Brand</th>
            <th scope="col">Type</th>
            <th scope="col">Categories</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Expired Date</th>
            <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        <?php require_once 'Ml_data.php'?>

      </tbody>
    </table>
  </div>
  </div>
</div>

<?php 
require_once 'Addmed.php';
require_once '../../inc/footer.php';
require_once '../../inc/popmsg.php';
?>