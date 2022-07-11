<?php

$transac = $pdo->prepare("SELECT * FROM purchase  WHERE (Date_purchased >= CURDATE()) GROUP BY Customer");
$transac->execute();
$sumdata = $pdo->prepare('SELECT SUM(total) FROM purchase');

if($transac->rowCount() > 0){
    ?>
        <?php foreach($transac as $transactions):
            $customer = $transactions->Customer;
            $sumdata = $pdo->prepare("SELECT SUM(total) FROM purchase WHERE Customer = :customer AND (Date_purchased >= CURDATE())");
            $sumdata->bindValue(':customer',$customer);
            $sumdata->execute();
            $data = $sumdata->fetchColumn();
            ?>
            <tr>
                <td><?php echo $transactions->Customer?></td>
                <td><?php echo $transactions->Date_purchased?></td>
                <td><?php echo $data?></td>
            </tr>
   
        <?php endforeach?>
    <?php
}
else{
        ?>
        <tr>
            <td colspan="3"> No data found</td>
        </tr>
        <?php
}
