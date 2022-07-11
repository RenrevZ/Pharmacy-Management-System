<?php 
        require_once '../../inc/session.php';
        require_once '../../inc/modals.php';
?>
<div class="containers container-main-style d-flex">
    <div class="col-2 side-menu">
        <span class="d-flex flex-column align-items-center">
            <img src="https://cdn-icons-png.flaticon.com/512/219/219970.png" alt="">
            <h5><?php echo $_SESSION['first_name'];echo '  ';echo $_SESSION['last_name']?></h5>
        </span>
        <ul>
            <li><a href=".././purchase/purchase.php"  class="button"><i class="fa-solid fa-sack-dollar"></i> Purchase</a></li>
            <li><a href=".././deliveries/deliveries.php"  class="button"><i class="fa-solid fa-truck-medical"></i>Deliveries</a></li>
            <li><a href=".././customer/customer.php"  class="button"><i class="fa-solid fa-id-badge"></i>Customer</a></li>
         </ul>
    </div>
<div class="col-10 main-column">
        <div class="navBar bg-white d-flex justify-content-between p-2 align-items-center">
        <div class="left text-secondary ">
        <h6>PHARMACY MANAGEMENT SYSTEM</h6>
        </div>
        <div class="right text-secondary d-flex">
            <h6 class="me-3 mt-2"><?php
            date_default_timezone_set("Asia/manila");
            echo date("m/d/Y h:i A"); 
            ?></h6>
            <button class="btn btn-danger btn-md" data-bs-toggle="modal" data-bs-target="#logout"><i class="fa-solid fa-power-off "></i>  Logout</button>
        </div>
        </div>