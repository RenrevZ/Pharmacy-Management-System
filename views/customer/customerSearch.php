<?php

if(isset($_POST['customer_search'])){
    $search = htmlentities($_POST['search_customer']);
    $customer_data = $pdo->prepare("SELECT * FROM customer WHERE `name` LIKE :search_customer");
    $customer_data->bindValue(':search_customer',"%$search%");
}else{
    $customer_data = $pdo->prepare("SELECT * FROM customer LIMIT :starting_limit_number,:result_per_page");
    $customer_data->bindValue(':starting_limit_number',(int)$starting_limit_number,PDO::PARAM_INT);
    $customer_data->bindValue(':result_per_page',(int)$result_per_page,PDO::PARAM_INT);
}