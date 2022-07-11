<?php
     require_once '../../inc/config.php';
     require_once '../../inc/session.php';
     require_once '../login/loginValidation.php';


if (isset($_POST['password_old']) && isset($_POST['password_new'])
    && isset($_POST['password_confirm'])) {

	function validate($data){
        $data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);
	   return $data;
	}
    //=== Getting the value and put into variables
    $op = validate($_POST['password_old']);
	$np = validate($_POST['password_new']);
	$c_np = validate($_POST['password_confirm']);

    if(empty($op)){

        $_SESSION['error'] = "Current Password is required";
        header("Location: settings.php");
        exit();
      }else if(empty($np)){
        $_SESSION['error'] = "New password  does not match";
        header("Location: settings.php");
        exit();
      }else if($np !== $c_np){
        $_SESSION['error'] = "New and Current password  does not match";
        header("Location: settings.php");
        exit();
      }else {
          // hashing the password
          $op = md5($op);
          $np = md5($np);
          $username = $_SESSION['username'];
  
          $sql = "SELECT password_mngr
                  FROM manager WHERE 
                  username=:username AND password_mngr=:op";

          $result = $pdo->prepare($sql);
          $result->bindValue(':username',$username);
          $result->bindValue(':op',$op);
          $result->execute();

          if($result->rowCount() === 1){
              
              $sql_2 = "UPDATE manager
                        SET password_mngr=:np
                        WHERE username=:username";

            $new_result = $pdo->prepare($sql_2);
            $new_result->bindValue(':np',$np);
            $new_result->bindValue(':username',$username);
            $new_result->execute();
            $_SESSION['success'] = 'Your password has been changed successfully';
              header("Location: settings.php");
	        exit();

  
          }else {
            $_SESSION['error'] = "Incorrect password";
            header("Location: settings.php");
	        exit();
          }
  
      }
  
      
  }else{
      header("Location: settings.php");
      exit();
  }



?>