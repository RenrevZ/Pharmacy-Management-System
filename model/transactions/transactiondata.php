<?php
    $transac = $pdo->prepare('SELECT * FROM purchase WHERE (Date_purchased >= CURDATE()) GROUP BY Staff_incharge');
    $transac->execute();

    if($transac->rowCount() > 0){
        ?>

            <?php foreach($transac as $trans):
                    $staff = $trans->Staff_incharge;
                    $sold =  $pdo->prepare("SELECT COUNT(product) FROM purchase WHERE Staff_incharge = :staff AND (Date_purchased >= CURDATE())");
                    $sold->bindValue(':staff',$staff);
                    $sold->execute();
                    $soldData = $sold->fetchColumn();
                    $total =  $pdo->prepare('SELECT SUM(total) FROM purchase WHERE Staff_incharge = :staff AND (Date_purchased >= CURDATE())');
                    $total->bindValue(':staff',$staff);
                    $total->execute();
                    $totalData = $total->fetchColumn();
                ?>
                <tr>
                    <td><?php echo $staff?> </td>
                    <td><?php echo $soldData?> </td>
                    <td><?php echo $totalData?> </td>
                    <td><a href="#" data-bs-toggle="modal" data-bs-target="#ViewTrans<?php echo $trans->id;?>">View in Detail</a> </td>
                </tr>
                    
            <?php endforeach;?>

        <?php
    }