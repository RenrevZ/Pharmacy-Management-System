<?php
 require_once '../../inc/session.php';
 require_once '../../inc/config.php';


if(isset($_POST['submit'])){
    $supplier = htmlentities($_POST['supplier']);
    $contact = htmlentities($_POST['contact']);
    $address = htmlentities($_POST['address']);

    $sp_insert = $pdo->prepare("INSERT INTO supplier(name,contact,address) VALUES (:supplier,:contact,:address)");
    $sp_insert->bindValue(':supplier',$supplier);
    $sp_insert->bindValue(':contact',$contact);
    $sp_insert->bindValue(':address',$address);
    $sp_insert->execute();

    $_SESSION['sucess-left'] = "New supplier added successfuly";
    header('location:supplier.php');
}