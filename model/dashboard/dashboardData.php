<?php 
     require_once '../../inc/session.php';
     require_once '../../inc/config.php';

     $md_list = $pdo->prepare('SELECT * FROM medicinelist');
     $md_list->execute();

     $md_expired = $pdo->prepare('SELECT * FROM medicinelist WHERE (exp_date >= CURDATE())');
     $md_expired->execute();

     $sales = $pdo->prepare('SELECT SUM(total) FROM purchase WHERE (Date_purchased >= CURDATE())');
     $sales->execute();
     $sales->rowCount();

     $manager = $pdo->prepare('SELECT * FROM manager');
     $manager->execute();

     $staff = $pdo->prepare('SELECT * FROM addnewstaff');
     $staff->execute();

     $supplier = $pdo->prepare('SELECT * FROM supplier');
     $supplier->execute();

     $deliveries = $pdo->prepare("SELECT * FROM deliveries");
     $deliveries->execute();