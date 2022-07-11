<?php
    require_once '../../inc/config.php';
    require_once '../../inc/session.php';
    $errors =[];
    if(isset($_POST['SU_submit'])){
        $su_name = htmlentities($_POST['superuser']);
        $su_pass = htmlentities($_POST['SU_pass']);
        $su_passhash = md5($su_pass);

        $su_username = $pdo->prepare("SELECT * FROM manager WHERE username = :su_name AND password_mngr=:su_pass");
        $su_username->bindValue(':su_name',$su_name);
        $su_username->bindValue(':su_pass',$su_passhash);
        $su_username->execute();
        $data = $su_username->fetch();

            if ($data)
            {   
                $_SESSION['success']='Welcome Superuser Admin';
                header('location:NewManager.php');
            }
          else 
          {
            $_SESSION['error'] = "wrong username or password";
            header('Location: settings.php');
          }
        
    }