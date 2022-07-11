<?php
  require_once '../../inc/config.php';
  require_once '../../inc/session.php';

  $sales_count = $pdo->prepare("SELECT SUM(total) FROM purchase WHERE (Date_purchased >= CURDATE())"); 
  $sales_count->execute();
  $ds_count = $sales_count->fetchColumn();
  echo $ds_count;