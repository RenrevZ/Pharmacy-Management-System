<?php

if(isset($_POST['submit_data'])){
    $search = htmlentities($_POST['search_medCat']);
    $medType_data = $pdo->prepare("SELECT * FROM medicinecategories WHERE Medicine_Category LIKE :search_medCat");
    $medType_data->bindValue(':search_medCat',"%$search%");
}else{
    $medType_data = $pdo->prepare("SELECT * FROM medicinecategories LIMIT :starting_limit_number,:result_per_page");
    $medType_data->bindValue(':starting_limit_number',(int)$starting_limit_number,PDO::PARAM_INT);
    $medType_data->bindValue(':result_per_page',(int)$result_per_page,PDO::PARAM_INT);
}