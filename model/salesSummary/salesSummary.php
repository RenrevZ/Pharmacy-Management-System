<?php
     require_once '../../inc/header.php';
     require_once '.././sidenav/sidenav.php';
     require_once '../../inc/config.php';
     require_once '../../inc/session.php';

?>
<div class="wrap d-flex align-items-center justify-content-center">

<div class="card w-75 mt-5">
  <div class="card-header d-flex justify-content-between">
    <h4 class="text-dark p-2">Sales Summary</h4>

    <div class="input-group">
  <div class="input-group-prepend mt-4">
    <span class="input-group-text me-3" >Select Sales FROM - TO</span>
  </div>
  <form action="salesSummary.php" method="POST" class="d-flex mt-4 h-50">
  <input type="date" class="form-control p-1 me-3" name="firstdate">
  <input type="date" class="form-control p-1 me-3" name="seconddate">
  <input type="submit"  class="btn btn-success btn-md" name="submit">
  </form>
</div>
  </div>
  <div class="card-body">
    <?php require_once 'salesSummaryData.php';?>

   <div class="sales-data d-flex justify-content-between mt-5">
        <div class="leftsales d-flex">
            <img src="https://cdn-icons.flaticon.com/png/512/3271/premium/3271314.png?token=exp=1657507040~hmac=5b87d7922c67496a87f9ee38e532abdb" 
            >
            <span class="flex-column ms-3">
                <h2 class="text-secondary">Sales</h2>
                 <h1 class="text-primary mt-5"><i class="fa-solid fa-peso-sign"></i> 
                <?php echo $_SESSION['sales'] ?? '0'; unset( $_SESSION['sales'])?></h1>
            </span>
            
        </div>

        <div class="leftsales d-flex">
            <img src="https://cdn-icons.flaticon.com/png/512/2314/premium/2314511.png?token=exp=1657506980~hmac=078ff0b584513329b5c2785a3e2d3006" 
            >
            <span class="flex-column ms-3">
                <h2 class="text-secondary">Quantity sold</h2>
                 <h1 class="text-primary mt-5">
                 <?php echo  $_SESSION['quantity'] ?? '0'; unset($_SESSION['quantity'])?></h1>
            </span>
            
        </div>
   </div>

  </div>
</div>

</div>


<?php 
require_once '../../inc/footer.php';
require_once '../../inc/popmsg.php';
?>