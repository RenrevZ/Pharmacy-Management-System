<?php
     require_once '../../inc/header.php';
     require_once '.././sidenav/sidenav.php';
     require_once '../../inc/config.php';
     require_once '../../inc/session.php';   
?>

<div class="wrapp d-flex flex-column justify-content-center px-5 mt-2">

<div class="card">

    <div class="card-header d-flex justify-content-between align-items-center p-3">
        <div class="left mt-2">
            <h5 class="text-secondary text-center">
                Deliveries   <i class="fa-solid fa-truck"></i>
            </h5>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" id="deliveries">
                <thead>
                    <tr> 
                        <th scope="col">Supplier</th>
                        <th scope="col">Ref No.</th>
                        <th scope="col">Delivery Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  require_once 'DeliveriesData.php'; ?>
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
