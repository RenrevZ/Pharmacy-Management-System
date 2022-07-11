<?php
  require_once '../../inc/session.php';
  require_once '../../inc/config.php';

  $expired = $pdo->prepare("SELECT COUNT(*) FROM medicinelist WHERE (exp_date <= CURDATE())");
  $expired->execute();
  $expired->rowCount();
  $xp_data = $expired->fetchColumn();
  
function selectData($data,$total){
    global $pdo;
    $data_total =  $pdo->prepare("SELECT SUM($total) FROM $data");
    $data_total->execute();
    $data_total->rowCount();
    $total = $data_total->fetchColumn();
   return $total;
}
$data= array();



        array_push($data,array("label" => 'Medicines',"data" => selectData('medicinelist','quantitypcs')));
        array_push($data,array("label" => 'Deliveries',"data" => selectData('deliveries','quantity')));
        array_push($data,array("label" => 'Purchase',"data" => selectData('purchase','quantity')));
        array_push($data,array("label" => 'Expired',"data" => $xp_data));



echo json_encode($data);
