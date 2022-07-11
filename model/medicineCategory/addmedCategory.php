<?php
 require_once '../../inc/session.php';
 require_once '../../inc/config.php';


if(isset($_POST['md_submit'])){
    $med_input = htmlentities($_POST['medicineCategory']);
    $mt_insert = $pdo->prepare("INSERT INTO medicinecategories(Medicine_Category) VALUES (:med_input)");
    $mt_insert->bindValue(':med_input',$med_input);
    $mt_insert->execute();
    $_SESSION['sucess-left'] = "Medicine Category added";
    header('location:medicineCategory.php');
}

