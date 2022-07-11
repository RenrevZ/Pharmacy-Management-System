<?php

require_once '../../inc/config.php';
    $supplier = $pdo->prepare("SELECT * FROM supplier");

    $supplier->execute();
    if($supplier->rowCount() > 0){
    ?>
    <?php foreach($supplier as $i => $sup):?>
        <tr>
            <td><?php echo $i+1?></td>
            <td class="text-start p-3">
            
                <small><i class="fa-solid fa-truck text-success"></i> 
                      Supplier Name: <strong class="text-primary"><?php echo $sup->name; ?></strong><br>
                </small>
                <small><i class="fa-solid fa-address-book text-success"></i>
                     Contact: <strong class="text-primary"><?php echo $sup->contact;?></strong><br>
                </small>
                <small><i class="fa-solid fa-location-dot text-success"></i>
                    Address: <strong class="text-primary"><?php echo $sup->address;?></strong><br>
                </small>
            
            </td>
            <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#supplier<?php echo $sup->id;?>">
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
