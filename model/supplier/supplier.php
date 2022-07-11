<?php 
    require_once '../../inc/header.php';
    require_once '.././sidenav/sidenav.php';
    require_once '.././login/loginValidation.php';
    require_once '../../inc/session.php';
?>

<div class="wrapp d-flex justify-content-around px-5 mt-2">

<div class="card w-25 h-25">
  <div class="card-body">
        <form action="addsupplier.php" method="POST">

                <div class="form-group p-3">
                    <label for="medicineType" class="mb-2">Supplier</label>
                    <input type="text" class="form-control mb-4" name="supplier" placeholder="add supplier" required>
                </div>

                <div class="form-group p-3">
                    <label for="medicineType" class="mb-2">Contact</label>
                    <input type="number" class="form-control mb-4" name="contact" placeholder="add Contact" required>
                </div>

                <div class="form-floating mb-3">
                    <textarea  class="form-control" style = "height:150px;" placeholder= "insert address here" name="address"></textarea>
                    <label for="floatingTextarea">address...</label>
                </div>

                <div class="form-group d-block">
                <input type="submit" name ="submit" class="btn btn-success col-12"></input>
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
            <table class="table table-sm table-bordered text-center" id="supplier">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Supplier</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            
            <?php  require_once 'supplierData.php';?>
            
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