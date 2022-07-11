<?php
    $least = $pdo->prepare('SELECT Product FROM purchase GROUP BY total ASC LIMIT 5');
    $least->execute();

    if($least->rowCount() > 0 ){
        foreach($least as  $product):
            $prod = $product->Product;
            $least_total = $pdo->prepare('SELECT SUM(total) FROM purchase WHERE Product = :prod GROUP BY total ASC');
            $least_total->bindValue(':prod',$prod);
            $least_total->execute();
        ?>
            <ul class="list-group list-group-flush ms-5">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo $prod?>
                         <span class="badge bg-primary rounded-pill ms-5"><?php echo  $least_total->fetchColumn();?></span>
                    </li>
                </ul>
        <?php
            endforeach;
    }