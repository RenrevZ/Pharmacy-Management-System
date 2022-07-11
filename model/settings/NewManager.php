<?php
     require_once '../../inc/header.php';
     require_once '.././sidenav/sidenav.php';
     require_once '../../inc/config.php';
     require_once '../../inc/session.php';
?>

<div class="wrapp d-flex justify-content-around px-5 mt-2 ">

<div class="card w-25 h-25">
  <div class="card-body">
    
  <form action="addNewManager.php" method="POST">
    <div class="form-group p-3">
        <h5 class=" text-center">New Manager</h5><br>
        <label for="first name" class="mb-2 text-center">First Name</label>
        <input type="text" class="form-control mb-4" name="name" placeholder="add name" value="<?php if(isset($_SESSION['name'])){ echo $_SESSION['name'];}?>" required>

        <label for="lastName" class="mb-2 text-center">Last name</label>
        <input type="text" class="form-control mb-4" name="lastname" placeholder="add lastname" value="<?php if(isset($_SESSION['lastname'])){echo $_SESSION['lastname'];}?>" required>

        <label for="username" class="mb-2 text-center">Username</label>
        <input type="text" class="form-control mb-4" name="username" placeholder="username" value="<?php if(isset($_SESSION['username'])){echo $_SESSION['username'];}?>" required>

        <label for="password" class="mb-2 text-center">password</label>
        <input type="password" class="form-control mb-4" name="password" placeholder="password" pattern=".{8,}" title="8 characters minimum" required>

        <label for="Confirm password" class="mb-2 text-center">Confirm password</label>
        <input type="password" class="form-control mb-4" name="confirmPass" placeholder="confirm password" pattern=".{8,}" title="8 characters minimum" required>
    </div>

    <div class="form-group d-block">
      <input type="submit" name ="manager_submit" class="btn btn-success col-12"></input>
    </div>
</form>
  </div>
</div>

<!-- Medicine Type Data -->
<div class="card w-50 h-50">
        <div class="card-header d-flex justify-content-between align-items-end">
        </div>
        <div class="card-body">
        <div class="table-responsive">
              <table class="table table-sm table-bordered text-center" id="NewManager">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Username</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
              <?php require_once 'ManagerData.php'?>
              </tbody>
            </table>
        </div>
      </div>
</div>

</div>

<?php 
require_once '../../inc/footer.php';
require_once '../../inc/popmsg.php';
?>