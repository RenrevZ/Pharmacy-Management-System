<?php 
require_once '../../inc/config.php';
$manager_data = $pdo->prepare("SELECT * FROM manager");

$manager_data->execute();
if($manager_data->rowCount() > 0){
?>
   <?php foreach($manager_data as $i => $manager):?>
        <tr>
            <td><?php echo $i+1?></td>
            <td><?php echo $manager->first_name.'  '.$manager->last_name;?></td>
            <td><?php echo $manager->username;?></td>
            <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Manager<?php echo $manager->id;?>">
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