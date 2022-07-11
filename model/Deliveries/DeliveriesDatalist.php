<!-- Modal for Viewing delivery Data-->
<div class="modal fade modal-lg"  id="supplier<?php echo $del->id?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">  
<div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header text-center">

        <h5 class="modal-title  text-secondary" id="staticBackdropLabel">Deliveries Made by <strong>
          <?php echo $del->Supplier_name?> </strong> on <strong><?php echo $del->Delivery_date?></strong></h5>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div>
      <div class="modal-body">
      <h5 class="text-secondary">Receive By: <strong><?php echo $del->Receive_by?></strong></h5>
      <table class="table table-hover text-center">
            <thead>
                <tr> 
                    <th scope="col">Product Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total Purchase</th>
                    <th scope="col">Expiry Date</th>
                </tr>
            </thead>
            <tbody>
              <?php
                      
                    $id =$del->id;
                    $name = $del->Supplier_name;
                    $date = $del->Delivery_date;
                    
                    $deldata = $pdo->prepare("SELECT * FROM deliveries WHERE Supplier_name =:name AND Delivery_date =:date");
                    $deldata->bindValue(":name",$name);
                    $deldata->bindValue(":date",$date);
                    $deldata->execute();

                if($deldata->rowCount() > 0){

                    foreach($deldata as $i => $delivered):
                    ?>
                    <tr>
                        <td><?php echo $delivered->product?></td>
                        <td><?php echo $delivered->quantity?></td>
                        <td><?php echo $delivered->Total_purchased?></td>
                        <td><?php echo $delivered->Expiry_Date?></td>
                    </tr>
                    <?php endforeach;


                }else{
                    ?>
                    <tr>
                      <td colspan="8" style="height:50px;"><strong>No data found</strong></td>
                    </tr>
                    <?php
                }


                ?>
            
            </tbody>
        </table>
      
    </div>
  </div>
</div>