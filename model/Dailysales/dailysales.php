<?php
     require_once '../../inc/header.php';
     require_once '.././sidenav/sidenav.php';
     require_once '../../inc/config.php';
     require_once '../../inc/session.php';   
?>

<div class="wrapp d-flex flex-column justify-content-center px-5 mt-2 ">

<div class="card w-50 text-center" id="Salescard">
    <div class="card-body  d-flex justify-content-between text-white">
        <div class="left">
            <h3>Total Sales today</h3>
            <h4><?php require_once 'DScount.php';?></h4>
        </div>
        
        <div class="right text-white">
            <i class="fa-solid fa-peso-sign"></i>
        </div>
    </div>
</div>

<div class="card mt-5">
    <div class="card-header">
    
    </div>

    <div class="card-body">
    <table class="table table-sm table-hover  text-center" id="dailysales">
        <thead>
          <tr>
            <th scope="col">Customer Name</th>
            <th scope="col">Date Purchased</th>
            <th scope="col">Total Purchased</th>
          </tr>
        </thead>
        <tbody>
                <?php require_once 'dspurchase.php';?>
        </tbody>
      </table>
    </div>

</div>

</div>


<?php 
require_once '../../inc/footer.php';
require_once '../../inc/popmsg.php';
?>