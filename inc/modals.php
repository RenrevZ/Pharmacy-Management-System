<!-- 
   -- Modals for deleting and editing medicine
   -- all pop ups for CRUDS
 -->

<!-- Modal for deleting a medicine Type-->
<div class="modal fade " id="staticBackdrop<?php echo $med->id;?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center text-secondary">
                    <img src="https://cdn-icons-png.flaticon.com/512/179/179386.png" class="w-25 mb-3">
                    <h1 >Are you sure?</h1>
                      <p>Data will be deleted permanently!</p>
            </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel X</button>
                        <a href="delete_medtype.php?id=<?php echo $med->id;?>" type="button" class="btn btn-danger">Confirm</a>
               </div>
                </div>
            </div>
          </div>
         </div>
        </div>
    </div>

 <!-- Modal for deleting a medicine list-->
 <div class="modal fade " id="medicinelist<?php echo $datas->id ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center text-secondary">
                    <img src="https://cdn-icons-png.flaticon.com/512/179/179386.png" class="w-25 mb-3">
                    <h1 >Are you sure?</h1>
                      <p>Data will be deleted permanently!</p>
            </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel X</button>
                        <a href="deleteMedlist.php?id=<?php echo $datas->id?>" type="button" class="btn btn-danger">Confirm</a>
               </div>
                </div>
            </div>
          </div>
         </div>
        </div>
</div>


<!-- Modal for Editing medicine medicine-->
<div class="modal fade modal-lg"  id="edit<?php echo $datas->id?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">  
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="staticBackdropLabel">Edit medicine</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php require_once '../../model/medicineList/editMed.php';?>

      <form action="../../model/medicineList/medUpdate.php" method="POST" class="d-flex justify-content-center">
        
        <div class="col-6 p-2">
          <input type="hidden" name="id" value="<?php echo $datas->id;?>"/>
          <label for="Brand name" class="form-label">Brand Name</label>
          <input type="text" class="form-control" name="Brand_name" value="<?php echo $datas->med_name;?>">
        </div>

        <div class="col-6 p-2">
        <label for="unit" class="form-label">Unit</label>
          <input type="text" class="form-control"  name="unit" value='<?php echo $datas->Unit ?>'>
        </div>

        <div  class="col-6 p-2">
        <label for="Type" class="form-label">Type</label>
        <input type="text" class="form-control"  name="Type" value='<?php echo $datas->type;?>'>
          </div>

        <div  class="col-6 p-2">
        <label for="Categories" class="form-label">Categories</label>
        <input type="text" class="form-control"  name="Categories" value='<?php echo  $datas->categories;?>'>
        </div>

        <div class="col-6 p-2">
          <label for="price" class="form-label">price</label>
          <input type="number" step="0.01" class="form-control" name="price" value='<?php echo $datas->price?>'>
        </div>

        <div class="col-6 p-2">
          <label for="Quantity" class="form-label">Quantity Per piece</label>
          <input type="number" step="0.01" class="form-control" name="Quantity" value='<?php echo $datas->quantitypcs;?>'>
        </div>

        <div class="col-10 p-2">
          <label for="expiration" class="form-label">Expiration date</label>
          <input type="date" class="form-control" name="expiration" value='<?php echo $datas->exp_date?>'>
        </div>

        <div class="col-12 p-2">
      <label for="Description" class="form-label">Description</label>
      <textarea class="form-control" name="description" rows="3"><?php echo $datas->description?></textarea>
      </div>
 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger w-25" data-bs-dismiss="modal">Close  <i class="fa-solid fa-xmark"></i></button>
        <button type="submit" name="submit" class="btn btn-success w-25">Submit  <i class="fa-solid fa-check"></i></button>
      </div>
      </form>

    </div>
  </div>
</div>


<!-- Modal for deleting a medicine Category-->
<div class="modal fade " id="medCategory<?php  echo $med->id; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body text-center text-secondary">
         <img src="https://cdn-icons-png.flaticon.com/512/179/179386.png" class="w-25 mb-3">
         <h1 >Are you sure?</h1>
         <p>Data will be deleted permanently!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel X</button>
        <a href="deleteMedCategory.php?id=<?php  echo $med->id;?>" type="button" class="btn btn-danger">Confirm</a>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
</div>

<!-- Modal for deleting a medicine Category-->
<div class="modal fade " id="supplier<?php echo $sup->id;?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body text-center text-secondary">
         <img src="https://cdn-icons-png.flaticon.com/512/179/179386.png" class="w-25 mb-3">
         <h1 >Are you sure?</h1>
         <p>Data will be deleted permanently!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel X</button>
        <a href="delete.php?id=<?php echo $sup->id;?>" type="button" class="btn btn-danger">Confirm</a>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
</div>

<!-- Modal for deleting a Manager-->
<div class="modal fade " id="Manager<?php echo $manager->id;?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body text-center text-secondary">
         <img src="https://cdn-icons-png.flaticon.com/512/179/179386.png" class="w-25 mb-3">
         <h1 >Are you sure?</h1>
         <p>Data will be deleted permanently!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel X</button>
        <a href="deleteManager.php?id=<?php echo $manager->id;?>" type="button" class="btn btn-danger">Confirm</a>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
</div>

<!-- Modal for deleting a customer-->
<div class="modal fade " id="customer<?php echo $customer->id?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body text-center text-secondary">
         <img src="https://cdn-icons-png.flaticon.com/512/179/179386.png" class="w-25 mb-3">
         <h1 >Are you sure?</h1>
         <p>Data will be deleted permanently!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel X</button>
        <a href="deletecustomer.php?id=<?php echo $customer->id?>" type="button" class="btn btn-danger">Confirm</a>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
</div>

<!-- Modal for deleting a staff-->
<div class="modal fade " id="staff<?php echo $staff->id;?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body text-center text-secondary">
         <img src="https://cdn-icons-png.flaticon.com/512/179/179386.png" class="w-25 mb-3">
         <h1 >Are you sure?</h1>
         <p>Data will be deleted permanently!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel X</button>
        <a href="deleteStaff.php?id=<?php echo $staff->id;?>" type="button" class="btn btn-danger">Confirm</a>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
</div>

<!-- Modal for logging in to add staff-->
<div class="modal fade " id="staff" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
            <h6 class="text-center text-secondary mb-3">
              Adding staff requires the user to be admin<br> 
              please login your Superuser username and password
            </h6>
        <form action="settingsValidation.php" method="POST" class="ms-5 w-75">

        <label for="username" class="form-label">Superuser username</label>
        <input type="text" class="form-control mb-2"  name="superuser"> 
        <label for="password" class="form-label">Superuser password</label>
        <input type="password" class="form-control"  name="SU_pass">
         
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel X</button>
        <button type="submit" name="SU_submit" class="btn btn-danger">Confirm</button>
        </form>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
</div>

<!-- Modal for logging in to add manager-->
<div class="modal fade " id="manager" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
            <h6 class="text-center text-secondary mb-3">
              Adding staff requires the user to be admin<br> 
              please login your Superuser username and password
            </h6>
        <form action="managerValidation.php" method="POST" class="ms-5 w-75">

        <label for="username" class="form-label">Superuser username</label>
        <input type="text" class="form-control mb-2"  name="superuser"> 
        <label for="password" class="form-label">Superuser password</label>
        <input type="password" class="form-control"  name="SU_pass">
         
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel X</button>
        <button type="submit" name="SU_submit" class="btn btn-danger">Confirm</button>
        </form>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
</div>


<!-- Modal for Changing the password-->
<div class="modal fade " id="ChangePass" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
            <h6 class="text-center text-secondary mb-3">
                Change Password <i class="fa-solid fa-key"></i>
            </h6>
        <form action="ChangePassword.php" method="POST" class="ms-5 w-75">

        <label for="username" class="form-label">Current Password</label>
        <input type="password" class="form-control mb-2"  name="password_old"> 

        <label for="password" class="form-label">New Password</label>
        <input type="password" class="form-control"  name="password_new">

        <label for="password" class="form-label">Confirm Password</label>
        <input type="password" class="form-control"  name="password_confirm">
         
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel X</button>
        <button type="submit" name="submit_pass" class="btn btn-danger">Confirm</button>
        </form>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
</div>


<!-- Modal for logging out-->
<div class="modal fade " id="logout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body text-center text-secondary">
         <img src="https://cdn-icons-png.flaticon.com/512/179/179386.png" class="w-25 mb-3">
         <h1 >Loging out!</h1>
         <p>Are you sure you want to logout?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel X</button>
        <a href="../sidenav/logout.php" type="button" class="btn btn-danger">Confirm</a>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
</div>