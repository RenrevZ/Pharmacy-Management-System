<?php 
    require_once '../../inc/header.php';
    require_once '../../inc/config.php';
    require_once '../../inc/session.php';
    require_once '../sidenav/sidenav.php';
?>

<div class="wrapp d-flex justify-content-around px-5 mt-2 ">

<div class="card w-100">

<form action="#" method="POST">
    <div class="card-header">
        <h3 class="text-center text-secondary">
            Purchase <i class="fa-solid fa-sack-dollar"></i>
        </h3>
    </div>
    <div class="card-body">
        <div class="inputs d-flex justify-content-between">

           <div class="customer mb-3 w-50 px-5">
           <h6>Customer</h6>
           <select  class="selectpicker" data-live-search="true" data-live-search="true"  name="customer" id="customer">
                    <option>Choose..</option>
                    <?php 
                        $customer = $pdo->prepare('SELECT `name` FROM customer');
                        $customer->execute();
                        if($customer->rowCount() > 0){
                            foreach($customer as $customers):
                            echo "<option value='$customers->name'>$customers->name</option>";
                            endforeach;
                        }
                    ?>
             </select>
             <form action=""  id="frmInvoice">
            <div class="form-group  d-flex">
              
                <input type="text" class="form-control me-2 mb-3" name="procode" id="procode" placeholder="productCode">

                
                <input type="text" class="form-control mb-3" name="pname" id="pname" placeholder="productName" readonly>
            </div>
                <div class="form-group d-flex">

                    <input type="number" class="form-control me-2 mb-3" name="price" id="price" placeholder="price" readonly>
                    
                    <input type="number" class="form-control mb-3" name="qty" id="qty" placeholder="Quantity">
                </div>
                <div class="form-group d-flex">
                    <input type="number" class="form-control mb-3" name="total" id="total" placeholder="Total" readonly>
                </div>
            
                <div class="form-group">
                <button type="button" class="btn btn-primary" name="procode" id="add" placeholder="add">
                            Add to purchase list</button>
                </div>
            
            </div>
            </form>

            <div class="pos w-50 px-5">
                    <div class="form-group p-2">
                    <label for="">Total</label>
                    <input type="number" class="form-control" name="finaltotal" id="finaltotal" readonly>
                    </div>

                <div class="form-group p-2">
                    <label for="">Pay Amount</label>
                    <input type="number" class="form-control" name="pay" id="pay">
                </div>

                <div class="form-group p-2">
                    <label for="">Change</label>
                    <input type="number" class="form-control" name="bal" id="bal" readonly>
                </div>

                <div class="form-group p-2">
                <input type="button" class="btn btn-primary col-12" name="submit" id="submit" value="Pay">
                </div>
            </div>

        </div>

           <div class="data">
                    <table class="table table-bordered" id="product_list">
                        <thead>
                            <tr>
                                <th>Action</th>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">quantity</th>
                                <th scope="col">Amount</th>
                            </tr>
                        </thead>
                        <tbody id="product_body">
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
