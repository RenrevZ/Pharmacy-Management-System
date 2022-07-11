<?php

    $customer = $pdo->prepare('SELECT * FROM purchase GROUP BY Customer ASC LIMIT 5');
    $customer->execute();

    
    
    if($customer->rowCount() > 0 ){
        foreach($customer as $i => $people):
            $customers = $people->Customer;
            $purchase = $pdo->prepare('SELECT COUNT(Customer) FROM purchase WHERE Customer=:customers');
            $purchase->bindValue(':customers',$customers);
            $purchase->execute();
            $purchase->rowCount();
        ?>
            <ul class="list-group list-group-flush ms-5">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo $customers?>
                         <span class="badge bg-primary rounded-pill ms-5"><?php echo  $purchase->fetchColumn();?></span>
                    </li>
                </ul>
        <?php
            endforeach;
    }
    