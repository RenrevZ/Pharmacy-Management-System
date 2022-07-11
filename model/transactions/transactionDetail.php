<?php

    $transac = $pdo->prepare('SELECT * FROM purchase WHERE (Date_purchased >= CURDATE())');
    $transac->execute();

    if($transac->rowCount() > 0 ){
        ?>
        <?php foreach($transac as $item):
            ?>

            <tr>
                <td><?php echo $item->Customer?></td>
                <td>
                    
                    <?php echo $item->Product?>
                    
                    
                </td>
                <td>
                
                <?php echo $item->total?>
                    
                </td>
                
            </tr>

        <?php endforeach ?>

    <?php
    }