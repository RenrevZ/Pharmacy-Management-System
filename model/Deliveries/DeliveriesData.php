<?php 
      require_once '../../inc/config.php';
      require_once '../../inc/session.php';
      $deliverysql = $pdo->prepare("SELECT  *  FROM  deliveries
                           GROUP BY Supplier_name
                           ORDER BY Delivery_date DESC ");
      
      $deliverysql->execute();
      if($deliverysql->rowCount() > 0){
        ?>
            <?php foreach($deliverysql as $i => $del):?>
            <tr>
            <td><?php echo $del->Supplier_name; $SESSION['supname'] = $del->Supplier_name?></td>
            <td><?php echo $del->Refference_No?></td>
            <td><?php echo $del->Delivery_date; $SESSION['deldate'] = $del->Delivery_date ?></td>
            <td><button class="btn_mdcedit btn btn-success btn-md mr-2 text-white" data-bs-toggle="modal" data-bs-target="#supplier<?php echo $del->id?>">
            <i class="fa-solid fa-eye"></i>  View in Details</button>
      
           <?php include '../../inc/modals.php';?>
           <?php include 'DeliveriesDatalist.php';?>

           </tr>
            <?php endforeach?>
        <?php }
        else{
          ?>
          <tr>
             <td colspan="8" style="height:50px;"><strong>No data found</strong></td>
         </tr>
     
      <?php
        }

         
?>