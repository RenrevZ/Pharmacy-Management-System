<?php 
        require_once '../../inc/session.php';
?>
<div class="containers container-main-style d-flex">
    <div class="col-2 side-menu" id="side-menu">
        <span class="d-flex flex-column align-items-center">
            <img src="https://cdn-icons-png.flaticon.com/512/219/219970.png" alt="">
            <h5><?php echo $_SESSION['first_name'];echo '  ';echo $_SESSION['last_name']?></h5>
        </span>
        <ul>
            <li><a href=".././dashboard/dashboard.php"  class="button"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
            <li><a href=".././Inventory/inventory.php"  class="button"><i class="fa-solid fa-database"></i> Inventory</a></li>
            <li><a href=".././customer/customer.php"  class="button"><i class="fa-solid fa-id-card"></i> Customer</a></li>
             <li id="med-list1"> 
                 <a href="#"  class="button sub-btn"><i class="bi bi-list-nested"></i> Medicine<i class="fa-solid fa-caret-down ms-5 list-btn2"></i></a>
                 <ul class="med-list" id="items-med">
                    <li> <a href=".././medicineList/medicineList.php"  class="button"><i class="fa-solid fa-list"></i>Medicine List</a></li>
                    <li> <a href=".././medicineType/medicineType.php"  class="button"><i class="fa-solid fa-list-check"></i>Medicine Type</a></li>
                    <li> <a href=".././medicineCategory/medicineCategory.php"  class="button"><i class="fa-solid fa-list-ol"></i>Med Category</a></li>
                    <li> <a href=".././expiredMedicine/expiredMedicine.php"  class="button"><i class="fa-solid fa-bars-staggered"></i>Expired Medicine</a></li>
                </ul>
            </li>  
             <li class="sales_sidenav" id="sales"> 
                <a href="#"  class="button"><i class="bi bi-file-earmark-text"></i>Sales<i class="fa-solid fa-caret-down ms-5 list-btn" id="carret"></i></a>
                <ul  id="salesli">
                    <li> <a href=".././transactions/transactions.php"  class="button"><i class="fa-solid fa-receipt"></i>Transactions</a></li>
                    <li> <a href=".././Dailysales/dailysales.php"  class="button"><i class="fa-solid fa-wallet"></i>Daily sales</a></li>
                    <li> <a href=".././salesSummary/salesSummary.php"  class="button"><i class="fa-solid fa-hand-holding-dollar"></i>Sales Summary</a></li>
                </ul>
            </li>

             <li> <a href=".././Deliveries/deliveries.php"  class="button"><i class="fa-solid fa-truck"></i>Deliveries</a></li>
             <li><a href=".././supplier/supplier.php"  class="button"><i class="fa-solid fa-user-group"></i>Supplier List</a></li>
             <li><a href=".././settings/settings.php"  class="button"><i class="bi bi-gear-fill"></i></i> Settings</a></li>
         </ul>
</div>
<div class="col-10 main-column h-100">
        <div class="navBar bg-white d-flex justify-content-between p-2 align-items-center">
        <div class="left text-secondary d-flex">
        <div class="hamburger me-3" id="hamburger">
            <i class="fa-solid fa-bars text-secondary"></i>
        </div>
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