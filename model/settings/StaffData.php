<?php 
    require_once '../../inc/config.php';
    $staff_data = $pdo->prepare("SELECT * FROM addnewstaff");
    
    $staff_data->execute();
    if($staff_data->rowCount() > 0){
    ?>
       <?php foreach($staff_data as $i => $staff):?>
            <tr>
                <td><?php echo $i+1?></td>
                <td><?php echo $staff->Name.'  '.$staff->Lastname;?></td>
                <td><?php echo $staff->username;?></td>
                <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staff<?php echo $staff->id;?>">
                <i class="fa-solid fa-trash"></i>  Delete
                </button>
                </td>
            </tr>
            <?php include '../../inc/modals.php';?>
        <?php endforeach?>
    <?php }
    else{
         ?>
             <tr>
                <td colspan="3" rowspan='4'>No data found</td>
            </tr>
        
         <?php
    }
?>