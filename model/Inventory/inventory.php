<?php
     require_once '../../inc/header.php';
     require_once '.././sidenav/sidenav.php';
     require_once '../../inc/config.php';
     require_once '../../inc/session.php';
?>

<div class="wrapp d-flex justify-content-around px-5 mt-2 ">
     <div class="card w-100">

          <div class="card-header text-secondary text-center">
               <h4>Inventory <i class="fa-solid fa-database"></i></h4> 
          </div>

          <div class="card-body">
          <div class="table-responsive">
               <table class="table table-bordered" id="Inventory">
                    <thead>
                         <tr>
                              <th>Product Name</th>
                              <th>Stocks In</th>
                              <th>Stocks Out</th>
                              <th>Expired</th>
                              <th>Stocks Available</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php require_once 'inventory_data.php';?>
                    </tbody>
               </table>
          </div>
          </div>
     </div>
</div>


<?php 
require_once '../../inc/footer.php';
require_once '../../inc/popmsg.php';
require_once '../../inc/modals.php';
?>