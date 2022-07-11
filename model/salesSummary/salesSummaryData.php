<?php
      require_once '../../inc/session.php';
    if(isset($_POST['submit'])){
        $date1 = htmlentities($_POST['firstdate']);
        $date2 = htmlentities($_POST['seconddate']);
        $newdate1 = date("M d,Y",strtotime($date1));
        $newdate2 = date("M d,Y",strtotime($date2));
        ?>
        <h5 class="text-center text-secondary d-flex justify-content-center mb-3">Total of Sales from <?php echo $newdate1?> To <?php echo $newdate2?></h5>
        <?php
        $ssum = $pdo->prepare("SELECT SUM(total) FROM purchase WHERE `Date_purchased` >= :date1 && `Date_purchased` <=:date2");
        $ssum->bindValue(':date1',$date1);
        $ssum->bindValue(':date2',$date2);
        $ssum->execute();
        $ssum->rowCount();
        $_SESSION['sales'] = $ssum->fetchColumn();
        
        
        $squant = $pdo->prepare("SELECT SUM(quantity) FROM purchase WHERE `Date_purchased` >= :date1 && `Date_purchased` <=:date2");
        $squant->bindValue(':date1',$date1);
        $squant->bindValue(':date2',$date2);
        $squant->execute();
        $squant->rowCount();
        $_SESSION['quantity'] = $squant->fetchColumn();
     }
     