<?php
     require_once '../../inc/config.php';
     require_once '../../inc/session.php';
    if(isset($_POST['submit'])){
    
        $id = htmlentities($_POST['id']);
        $brand_name = htmlentities($_POST['Brand_name']);
        $unit = htmlentities($_POST['unit']);
        $Type = htmlentities($_POST['Type']);
        $Categories= htmlentities($_POST['Categories']);
        $price = htmlentities($_POST['price']);
        $Quantity = htmlentities($_POST['Quantity']);
        $expiration = htmlentities($_POST['expiration']);
        $description = htmlentities($_POST['description']);

        $update = $pdo->prepare("UPDATE medicinelist 
                SET  med_name = :brand_name,
                Unit = :unit,
                type = :type,
                categories = :categories,
                price = :price,
                quantitypcs = :quantitypcs,
                exp_date = :exp_date,
                description = :description
            WHERE id=:id
        ");
        $update->bindValue(':brand_name',$brand_name);
        $update->bindValue(':unit',$unit);
        $update->bindValue(':type',$Type);
        $update->bindValue(':categories',$Categories);
        $update->bindValue(':price',$price);
        $update->bindValue(':quantitypcs',$Quantity);
        $update->bindValue(':exp_date',$expiration);
        $update->bindValue(':description',$description);
        $update->bindValue(':id',$id);
        $update->execute();

        $_SESSION['success'] = 'medicine updated!!';
        header('location: medicineList.php');
    }