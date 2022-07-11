<?php   
    require_once '../../inc/config.php';
    require_once '../../inc/session.php';
    if (isset($_GET['id']))
    {
        $id = $_GET['id'];

    $result = $pdo->prepare("DELETE FROM medicinelist WHERE id= :id");
    $result->bindValue(':id',$id);
    $result->execute();
    
    $_SESSION['sucess-left'] = "file deleted successfully";
    header("Location:medicineList.php");
}
    ?>