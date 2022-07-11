<?php 
    require_once '../../inc/header.php';
    require_once '.././sidenav/sidenav.php';
    require_once '.././login/loginValidation.php';
    require_once '../../inc/session.php';
    require_once 'dashboardData.php';
?>

<div class="wrapp wrapp-dashboard ps-3 mt-3 d-flex flex-wrap justify-content-evenly h-100">

<!-- === first items ====== -->
<div class="card   h-25 card-dashboard5 me-2 text-white">
  <div class="card-body d-flex justify-content-between">
    <div>
            <h5 class="card-title">Total Sales today</h5>
            <h5 class="text-center"><?php echo $sales->fetchColumn() ?></h5>
    </div>
    <div class="ms-2">
            <i class="fa-solid fa-peso-sign"></i>
    </div>
</div>
</div>

<!-- === first items ====== -->
<div class="card   h-25 card-dashboard me-2 text-white">
  <div class="card-body d-flex justify-content-between">
    <div>
            <h5 class="card-title">Medicine Stocks</h5>
            <h4 class="text-center"><?php echo $md_list->rowCount(); ?></h4>
    </div>
    <div class="ms-2">
             <i class="fa-solid fa-file-prescription"></i>
    </div>
  </div>
</div>

<!-- === first items ====== -->
<div class="card   h-25 card-dashboard2 me-2 text-white">
  <div class="card-body d-flex justify-content-between">
    <div>
            <h5 class="card-title">Expired Medicine</h5>
            <h4 class="text-center"><?php echo $md_expired->rowCount(); ?></h4>
    </div>
    <div class="ms-2">
             <i class="fa-solid fa-pills"></i>
    </div>
  </div>
</div>

<!-- === first items ====== -->
<div class="card   h-25 card-dashboard7 me-2 text-white">
  <div class="card-body d-flex justify-content-between">
    <div>
            <h5 class="card-title">Items in Storage</h5>
            <h4 class="text-center"><?php echo $deliveries->rowCount();?></h4>
    </div>
    <div class="ms-2">
            <i class="fa-solid fa-warehouse"></i>
    </div>
  </div>
</div>



</div>

<div class="wrapp-dashboard  mt-3 d-flex flex-wrap justify-content-evenly">

<!-- === first items ====== -->
<div class="card  px-2 h-25 card-dashboard3 me-2 text-white">
  <div class="card-body d-flex justify-content-between">
    <div>
            <h5 class="card-title">Total Manager</h5>
            <h4 class="text-center"><?php echo $manager->rowCount(); ?></h4>
    </div>
    <div class="ms-2">
            <i class="fa-solid fa-user-tie"></i>
    </div>
  </div>
</div>

<!-- === first items ====== -->
<div class="card px-3  h-25 card-dashboard4 me-2 text-white">
  <div class="card-body d-flex justify-content-between">
    <div>
            <h5 class="card-title">Total Staff</h5>
            <h4 class="text-center"><?php echo $staff->rowCount();?></h4>
    </div>
    <div class="ms-2">
            <i class="fa-solid fa-users"></i>
    </div>
</div>
</div>

<!-- === first items ====== -->
<div class="card  px-2 h-25 card-dashboard6 me-2 text-white">
  <div class="card-body d-flex justify-content-between">
    <div>
            <h5 class="card-title">Total Supplier</h5>
            <h4 class="text-center"><?php echo $supplier->rowCount();?></h4>
    </div>
    <div class="ms-2">
            <i class="fa-solid fa-truck"></i>
    </div>
</div>
</div>

<!-- === first items ====== -->
<div class="card px-2  h-25 card-dashboard8 me-2 text-white">
  <div class="card-body d-flex justify-content-between">
    <div>
            <h5 class="card-title">Returned Supply</h5>
            <h4 class="text-center">300</h4>
    </div>
    <div class="ms-2">
            <i class="fa-solid fa-box"></i>
    </div>
</div>
</div>



</div>

<div class="wrapp-dashboard  mt-4 d-flex sm-flex-column justify-content-between w-50" id="Chart">

<div id="chartContainer" class="ms-5">
      
</div>

<div id="graph" class="ms-5">
      
</div>

</div>


<?php 
require_once '../../inc/footer.php';
require_once '../../inc/popmsg.php';
require_once '../../inc/modals.php';
?>