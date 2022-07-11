<?php
    require_once '../../inc/config.php';
    require_once '../../inc/session.php';
    
    if(isset($_POST['submit'])){
        $product_id = htmlentities($_POST['productID']);
        $brand_name = htmlentities($_POST['Brand_name']);
        $unit = htmlentities($_POST['unit']);
        $Type = htmlentities($_POST['Type']);
        $Categories= htmlentities($_POST['Categories']);
        $price = htmlentities($_POST['price']);
        $Quantity = htmlentities($_POST['Quantity']);
        $expiration = htmlentities($_POST['expiration']);
        $description = htmlentities($_POST['description']);
        $prescribe = htmlentities($_POST['prescribe']);

        $sql = $pdo->prepare('INSERT INTO medicinelist(product_id,med_name,Unit,type,categories,price,quantitypcs,exp_date,description,prescription) 
                              VALUES(:product_id,:med_name,:Unit,:type,:categories,:price,:quantitypcs,:exp_date,:description,:prescription)');
        $sql->bindValue(':product_id',$product_id);
        $sql->bindValue(':med_name',$brand_name);
        $sql->bindValue(':Unit',$unit);
        $sql->bindValue(':type',$Type);
        $sql->bindValue(':categories',$Categories);
        $sql->bindValue(':price',$price);
        $sql->bindValue(':quantitypcs',$Quantity);
        $sql->bindValue(':exp_date',$expiration);
        $sql->bindValue(':description',$description);
        $sql->bindValue(':prescription',$prescribe);
        $sql->execute();

        $_SESSION['success']="successfully added to medicine list";
        header('location: medicineList.php');
    }