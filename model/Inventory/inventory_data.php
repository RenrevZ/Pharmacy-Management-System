<?php

    $products = $pdo->prepare('SELECT * FROM  medicinelist GROUP BY med_name');
    $products->execute();

    if($products->rowCount() > 0){
        ?>
            <?php foreach($products as $items):
                    $pname = $items->med_name;
                    $stocks_out = $pdo->prepare("SELECT SUM(quantity) FROM purchase WHERE Product = :pname");
                    $stocks_out->bindValue(':pname',$pname);
                    $stocks_out->execute();
                    $data_out = $stocks_out->fetchColumn();

                    $stocks_in = $pdo->prepare("SELECT SUM(quantity) FROM deliveries WHERE Product = :pname");
                    $stocks_in->bindValue(':pname',$pname);
                    $stocks_in->execute();
                    $data_in = $stocks_in->fetchColumn();

                    $xp = $pdo->prepare("SELECT SUM(quantitypcs) FROM medicinelist WHERE (exp_date <= CURDATE()) AND  med_name = :pname");
                    $xp->bindValue(':pname',$pname);
                    $xp->execute();
                    $data_xp = $xp->fetchColumn();

                    $quant = $pdo->prepare("SELECT SUM(quantitypcs) FROM medicinelist WHERE  med_name = :pname");
                    $quant->bindValue(':pname',$pname);
                    $quant->execute();
                    $data_quant = $quant->fetchColumn();

                    $stocks = $data_in+$data_quant;
                    
                ?>
                <tr>
                    <td><?php echo $pname;?></td>
                    <td>
                        <?php 
                            if($data_in == ''){
                                echo '0';
                            }else{
                            echo $data_in;
                            }
                        ?>
                    </td>
                    <td>
                        <?php
                            if($data_out == ''){
                                echo '0';
                            }else{
                                echo $data_out;
                            } 
                        ?>
                    </td>
                    <td>
                        <?php 
                            if($data_xp == ''){
                                echo '0';
                            }else{
                            echo $data_xp;
                            }
                        ?>
                    </td>
                    <td>
                        <?php 
                            if($stocks == ''){
                                echo '0';
                            }else{
                                echo $stocks;
                            }
                        ?>
                    </td>
                </tr>
            <?php endforeach?>
        <?php
    }