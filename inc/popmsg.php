<?php   
// success message
  if(isset($_SESSION['success'])){
     $success = $_SESSION['success'];
        ?>
        <?php
         echo "<script>
                 Swal.fire(
                'Success!',
                '$success',
                 'success'
                 )
                </script>";
                unset($_SESSION['success']);
            ?>
            <?php 
    }

// success left 
if(isset($_SESSION['sucess-left'])){
  $success_l = $_SESSION['sucess-left'];
  ?>
  <?php
   echo "<script>
          Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: '$success_l',
            showConfirmButton: false,
            timer: 1500
          })
          </script>";
          unset($_SESSION['sucess-left']);
      ?>
      <?php 
}

// error message
if(isset($_SESSION['error'])){
     $error = $_SESSION['error'];
        ?>
        <?php
         echo "<script>
         Swal.fire(
          '$error!',
          'please check your correct details',
           'error'
           )
                </script>";
                unset($_SESSION['error']);
            ?>
            <?php 
            
    }
?>
 