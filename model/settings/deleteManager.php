<?php   
    require_once '../../inc/config.php';
    if(!isset($_SESSION)){
        session_start();
     }

    
    if (isset($_GET['id']))
    {
        $id = $_GET['id'];

    $result = $pdo->prepare("DELETE FROM manager WHERE id= :id");
    $result->bindValue(':id',$id);
    $result->execute();
    
    $_SESSION['sucess-left'] = "Manager has been Terminated";
    header("Location:NewManager.php");
}
    ?>