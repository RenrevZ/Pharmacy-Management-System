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
            Deliveries <i class="fa-solid fa-truck-medical"></i>
        </h3>
    </div>
    <div class="card-body">
        <div class="inputs d-flex justify-content-between">

           <div class="customer mb-3 w-50 px-5">
            <h6>Supplier Name</h6>
            <select  class="selectpicker" data-live-search="true" data-live-search="true"  name="Supplier"  id="Supplier">
                        <option>Choose..</option>
                        <?php 
                            $supplier = $pdo->prepare('SELECT `name` FROM supplier');
                            $supplier->execute();
                            if($supplier->rowCount() > 0){
                                foreach($supplier as $suppliers):
                                echo "<option value='$suppliers->name'>$suppliers->name</option>";
                                endforeach;
                            }
                        ?>
                </select>

           
        
             <form action=""  id="frmInvoice2">
            <div class="form-group d-flex  mb-3">
            <div class="left d-flex flex-column me-3">
                <h6>Ref. No.</h6>
                <input type="number" class="form-control" name="ref" id="ref">
            </div>
          
             <div class="right d-flex flex-column">
                <label for="Expiry date">Expiry date</label>
                <input type="date" class="form-control" name="xpdate" id="xpdate">
             </div>
            </div>
            <div class="form-group  d-flex">
                <input type="text" class="form-control me-2 mb-3" name="procode2" id="procode2" placeholder="productCode">

                
                <input type="text" class="form-control mb-3" name="pname2" id="pname2" placeholder="productName" readonly>
            </div>
                <div class="form-group d-flex">

                    <input type="number" class="form-control me-2 mb-3" name="price2" id="price2" placeholder="price" readonly>
                    
                    <input type="number" class="form-control mb-3" name="qty2" id="qty2" placeholder="Quantity">
                </div>
                <div class="form-group d-flex">
                    <input type="number" class="form-control mb-3" name="total2" id="total2" placeholder="Total" readonly>
                </div>
            
                <div class="form-group">
                <button type="button" class="btn btn-primary" name="procode2" id="add2" placeholder="add">
                            Add to purchase list</button>
                </div>
            
            </div>
            </form>

            <div class="pos w-50 px-5">
                    <div class="form-group p-2">
                    <label for="">Total</label>
                    <input type="number" class="form-control" name="finaltotal2" id="finaltotal2" readonly>
                    </div>

                <div class="form-group p-2">
                    <label for="">Pay Amount</label>
                    <input type="number" class="form-control" name="pay2" id="pay2">
                </div>

                <div class="form-group p-2">
                    <label for="">Change</label>
                    <input type="number" class="form-control" name="bal2" id="bal2" readonly>
                </div>

                <div class="form-group p-2">
                <input type="button" class="btn btn-primary col-12" name="submit2" id="submit2" value="Pay">
                </div>
            </div>

        </div>

           <div class="data">
                    <table class="table table-bordered" id="product_list2">
                        <thead>
                            <tr>
                                <th>Action</th>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">quantity</th>
                                <th scope="col">Amount</th>
                            </tr>
                        </thead>
                        <tbody id="product_body2">
                            
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
