<?php

    $customer = $pdo->prepare('SELECT * FROM purchase GROUP BY Customer ASC LIMIT 5');
    $customer->execute();

    
    
    if($customer->rowCount() > 0 ){
        foreach($customer as $people):
            $customers = $people->Customer;
            $address = $pdo->prepare('SELECT `address` FROM customer WHERE `name`=:customers GROUP BY name ASC');
            $address->bindValue(':customers',$customers);
            $address->execute();
        ?>
            <ul class="list-group list-group-flush ms-5">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?php echo $address->fetchColumn() ?>
                         <span class="badge bg-primary rounded-pill ms-5"><?php echo  $address->rowCount()?></span>
                    </li>
                </ul>
        <?php
            endforeach;
    }