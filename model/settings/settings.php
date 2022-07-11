<?php
     require_once '../../inc/header.php';
     require_once '.././sidenav/sidenav.php';
     require_once '../../inc/config.php';
     require_once '../../inc/session.php';
     
?>

<div class="wrap mt-5 d-flex flex-column align-items-center justify-content-center h-75">
    
    
    <div class="card w-50">
        <div class="card-body" id="add-Manager">
            <div class="card-header text-secondary text-center bg-white">
                <h5>Settings   <i class="fa-solid fa-gear"></i></h5>
            </div>
            <a href="#" class="d-flex justify-content-between px-3 mt-2" data-bs-toggle="modal" data-bs-target="#manager">
    
            <div class="add-Manager">
                    <div class="main-item">
                        <h5 class="text-dark">Add new Manager</h5>
                        <small>Manager has the ability to manage and see the reports</small>
                    </div>
            
                    <div class="icon">
                    <i class="fa-solid fa-user-check"></i>
                    </div>  
            </a>
            </div>
        </div>
    </div>

    <div class="card w-50">
        <div class="card-body" id="add-Manager">

            <a href="#" class="d-flex justify-content-between px-3" data-bs-toggle="modal" data-bs-target="#staff">
            <div class="add-Manager">
                    <div class="main-item">
                        <h5 class="text-dark">Add new Staff</h5>
                        <small>Staff has the ability to take orders and manage deliveries</small>
                    </div>
            
                    <div class="icon">
                    <i class="fa-solid fa-user-plus"></i> 
                </div>  
            </a>
            </div>
        </div>
    </div>

    <div class="card w-50">
        <div class="card-body" id="add-Manager"  data-bs-toggle="modal" data-bs-target="#ChangePass">

            <a href="#" class="d-flex justify-content-between px-3">
            <div class="add-Manager">
                    <div class="main-item">
                        <h5 class="text-dark">Change password</h5>
                        <small>Change your current password to a new one</small>
                    </div>
            
                    <div class="icon">
                            <i class="fa-solid fa-key"></i>
                    </div>  
            </a>
            </div>
        </div>
    </div>

    <div class="card w-50">
        <div class="card-body" id="add-Manager">

            <a href="#" class="d-flex justify-content-between px-3">
            <div class="add-Manager">
                    <div class="main-item">
                        <h5 class="text-dark">Change Super User password</h5>
                        <small>Change your Super User password</small>
                    </div>
            
                    <div class="icon">
                            <i class="fa-solid fa-user-shield"></i>
                    </div>  
            </a>
            </div>
        </div>
    </div>


</div>

    




<?php 
require_once '../../inc/footer.php';
require_once '../../inc/modals.php';
require_once '../../inc/popmsg.php';
?>