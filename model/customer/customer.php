<?php 
    require_once '../../inc/header.php';
    require_once '../../inc/config.php';
    require_once '../../inc/session.php';
    require_once '../sidenav/sidenav.php';
?>

<div class="wrapp d-flex justify-content-around px-5 mt-2 ">

<div class="card ">
    <div class="card-header">
        <h5 class="text-secondary text-center">
            Customer
        </h5>
    </div>

    <div class="card-body ">
    <div class="containerss mt-5 d-flex  justify-content-center">

            <div class="left d-flex mb-4"  id="customerLocation">
                <img src="https://cdn-icons.flaticon.com/png/512/1365/premium/1365700.png?token=exp=1657522440~hmac=979e545cc2ee3f61577599adbabd44d7" alt="">
                <span class="flex-column">
                    <h5 class="ms-4">Regular Customer Location</h5>
                <?php require_once 'custLocationData.php';?>
                </span>
            </div>

            <div class="right d-flex"  id="customerLocation">
                <img src="https://cdn-icons-png.flaticon.com/512/1484/1484584.png" alt="">
                <span class="flex-column">
                    <h5 class="ms-4">Regular Customers</h5>
                <?php require_once 'customerData.php';?>
                </span>
            </div>
            
        </div>

    <div class="containerss mt-5 ms-2 d-flex  justify-content-center">

            <div class="left d-flex mb-4"  id="customerLocation">
                <img src="https://cdn-icons.flaticon.com/png/512/647/premium/647186.png?token=exp=1657522406~hmac=da90b4f351f51f64121a0aade2630664" alt="">
                <span class="flex-column">
                    <h5 class="ms-4">Most Buy Product</h5>
                    <?php require_once 'mostBuy.php';?>
                </span>
            </div>

            <div class="right d-flex"  id="customerLocation">
                <img src="https://cdn-icons-png.flaticon.com/512/822/822143.png" alt="">
                <span class="flex-column">
                    <h5 class="ms-4">Least Buy Product</h5>
                <?php require_once 'leastBuy.php';?>
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