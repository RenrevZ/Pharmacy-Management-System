<?php
 require_once '../../inc/session.php';
 require_once '../../inc/config.php';


if(isset($_POST['md_submit'])){
    $med_input = htmlentities($_POST['medicineType']);
    $mt_insert = $pdo->prepare("INSERT INTO medicinetype(MedicineType) VALUES (:med_input)");
    $mt_insert->bindValue(':med_input',$med_input);
    $mt_insert->execute();
    $_SESSION['sucess-left'] = "Medicine added successfully";
    header('location:medicineType.php');
}

