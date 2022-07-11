<?php
     require_once '../../inc/header.php';
     require_once '.././sidenav/sidenav.php';
     require_once '../../inc/config.php';
     require_once '../../inc/session.php';
?>
<div class="wrapp d-flex flex-column justify-content-center px-5 mt-2 ">

<div class="card w-50" id="transaction">
    <div class="card-body  d-flex justify-content-between text-white">
        <div class="left ">
            <h3>Total Transaction today</h3>
            <h4><?php require_once 'transactionlinks.php';?></h4>
        </div>
        
        <div class="right text-white">
        <i class="fa-solid fa-receipt"></i>
        </div>
    </div>
</div>

<div class="card mt-5">
    <div class="card-header">
    
    </div>

    <div class="card-body">
      <div class="table-responsive">
          <table class="table table-sm table-bordered text-center" id="transactions">
              <thead>
                <tr>
                  <th scope="col">Staff name</th>
                  <th scope="col">Products Sold</th>
                  <th scope="col">Total Sold</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
              <?php require_once 'transactiondata.php';?>
              </tbody>
            </table>
      </div>
    </div>

</div>

</div>
<?php 
require_once 'transactionview.php';
require_once '../../inc/footer.php';
require_once '../../inc/popmsg.php';
?>