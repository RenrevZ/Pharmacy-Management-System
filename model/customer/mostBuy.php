<?php

    $most = $pdo->prepare('SELECT Product FROM purchase GROUP BY total DESC LIMIT 5');
    $most->execute();

    if($most->rowCount() > 0 ){
        foreach($most as  $product):
            $prod = $product->Product;
            $most_total = $pdo->prepare('SELECT SUM(total) FROM purchase WHERE Product = :prod');
            $most_total->bindValue(':prod',$prod);
            $most_total->execute();
        ?>
            <ul class="list-group list-group-flush ms-5">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo $prod?>
                         <span class="badge bg-primary rounded-pill ms-5"><?php echo  $most_total->fetchColumn();?></span>
                    </li>
                </ul>
        <?php
            endforeach;
    }