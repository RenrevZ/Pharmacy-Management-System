<?php 
    require_once '../../inc/config.php';
    
    $medType_data = $pdo->prepare("SELECT * FROM medicinecategories");
     $medType_data->execute();
    if($medType_data->rowCount() > 0){
    ?>
       <?php foreach($medType_data as $i => $med):?>
            <tr>
                <td><?php echo $i+1?></td>
                <td><?php echo $med->Medicine_Category?></td>
                <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#medCategory<?php  echo $med->id; ?>">
                <i class="fa-solid fa-trash"></i>  Delete
            </button>
            <?php include '../../inc/modals.php';?>
        </td>
            </tr>
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

    