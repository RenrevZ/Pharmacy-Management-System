<?php 
      require_once '../../inc/config.php';
      require_once '../../inc/session.php';

      $data = $pdo->prepare("SELECT * FROM medicinelist");
      
      $data->execute();
      if($data->rowCount() > 0){
        ?>
            <!-- fecthing all the data from the database -->
            <?php foreach($data as $i => $datas):
                 $date = $datas->exp_date;
                 $newdate = date("M d Y",strtotime($date));
              ?>
            <tr id="myUL">
            <!-- Displaying if the medicine need a prescription or not -->
           <td><?php echo $datas->product_id ?></td>
            <td class="p-2"><?php echo $datas->med_name;echo '  '; echo $datas->Unit; echo'</br>';
            if($datas->prescription == '' || $datas->prescription == null){}
            else{ ?> 
            <small class="badge rounded-pill text-bg-success p-1"><?php echo $datas->prescription;?></small>
            <?php }
            ?></td>

            <td><?php echo $datas->type  ?></td>
            <td><?php echo $datas->categories  ?></td>
            <td><?php echo "P".$datas->price  ?></td>
            <td><?php echo $datas->quantitypcs ?></td>
            <td><?php echo $newdate ?></td>
             
             <td><button class="btn_mdcedit btn btn-info btn-md mr-2 text-white" data-bs-toggle="modal" data-bs-target="#edit<?php echo $datas->id?>" <?php $SESSION['id'] = $datas->id?>><i class="fa-solid fa-pen-to-square"></i>Edit</button>
           <button class="btn btn-danger btn-md text-white" data-bs-toggle="modal" data-bs-target="#medicinelist<?php echo $datas->id ?>"><i class="fa-solid fa-trash"></i> Delete</button></td>
      
           <?php include '../../inc/modals.php';?>
           <?php include 'editMed.php';?>
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