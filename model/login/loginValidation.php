<?php

require_once '../../inc/config.php';
require_once '../../inc/session.php';

$errors = [];
// ====== Manager Login
if(isset($_POST['m-submit']))
{ 
    $username = htmlentities($_POST['manager_input']);
    $password = htmlentities($_POST['manager_password']);

    $password = md5($password);
    if (md5($_POST['manager_password']) !== $password)
    {   
        $_SESSION['error'] = "incorrect password";
       header("Location: ../../index.php");
      }

    if (count($errors) == 0) 
    {
      $stmt =$pdo ->prepare("SELECT * FROM manager WHERE username= :username AND password_mngr = :password");
      $stmt->bindValue(':username',$username);
      $stmt->bindValue(':password',$password);
      $stmt->execute();
      $data = $stmt->fetch();
		
      
      $statement= $pdo->prepare("SELECT first_name,last_name FROM manager WHERE username=:username AND  password_mngr=:password");
      $statement->bindValue(':username',$username);
      $statement->bindValue(':password',$password);
      $statement->execute();
      $data_estate = $statement->fetch();
		
      if ($data) 
      {
        $_SESSION['username'] = $username;
        $_SESSION['first_name'] =$data_estate->first_name;
		
		    $_SESSION['last_name'] =$data_estate->last_name;
        $_SESSION['success'] = 'You have been login successfully';
        header('location: ../dashboard/dashboard.php');
      }
      else 
      {
        $_SESSION['error'] = "wrong username or password";
        header('Location: ../../index.php?');
      }
    } 

  }


  // login as pharmacist 

  if(isset($_POST['pharma_submit'])){
    $username = htmlentities($_POST['staff_input']);
    $password = htmlentities($_POST['staff_password']);

    $password = md5($password);
    if (md5($_POST['staff_password']) !== $password)
    {   
        $_SESSION['error'] = "incorrect password";
         header("Location: ../../index.php");
      }

    if (count($errors) == 0) 
    {
      $stmt =$pdo ->prepare("SELECT * FROM addnewstaff WHERE username= :username AND `password` = :password");
      $stmt->bindValue(':username',$username);
      $stmt->bindValue(':password',$password);
      $stmt->execute();
      $data = $stmt->fetch();
		
      
      $statement= $pdo->prepare("SELECT Name,Lastname FROM addnewstaff WHERE username=:username AND  `password`=:password");
      $statement->bindValue(':username',$username);
      $statement->bindValue(':password',$password);
      $statement->execute();
      $data_estate = $statement->fetch();
		
      if ($data) 
      {
        $_SESSION['username'] = $username;
        $_SESSION['first_name'] =$data_estate->Name;
		
		    $_SESSION['last_name'] =$data_estate->Lastname;
        $_SESSION['success'] = 'Welcome '.$_SESSION['first_name'].' have a good day';
        header('location: ../../views/purchase/purchase.php');
      }
      else 
      {
        $_SESSION['error'] = "wrong username or password";
        header('Location: ../../index.php?');
      }
    } 

  }