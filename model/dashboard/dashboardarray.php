<?php
  require_once '../../inc/session.php';
  require_once '../../inc/config.php';

$monthly_purchased = $pdo->prepare("SELECT YEAR(Date_purchased) as years,MONTH(Date_purchased) 
as months, SUM(total) as TOTAL FROM purchase GROUP BY MONTH(Date_purchased)");
$monthly_purchased->execute();


$dataPoints= array();

if($monthly_purchased->rowCount() > 0 ){
    foreach($monthly_purchased as $items){
        $month =  $items->months;
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $monthName = $dateObj->format('F');
       
        array_push($dataPoints,array("Months" => $monthName,"total" => $items->TOTAL));
        
    }
}

echo json_encode($dataPoints);


