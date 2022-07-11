<!-- Modal for adding medicine-->
<div class="modal fade modal-lg"  id="ViewTrans<?php echo $trans->id;?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center text-secondary" id="staticBackdropLabel">
          <?php echo $trans->Staff_incharge?>'s Transaction <i class="fa-solid fa-money-check-dollar-pen"></i></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <table class="table table-hover">
          <thead>
            <tr>
                <th>Customer</th>
                <th>Purchase</th>
                <th>Total</th>
                
            </tr>
          </thead>
          <tbody>
              <?php require_once 'transactionDetail.php';?>
          </tbody>
        </table>

    </div>
  </div>
</div>




