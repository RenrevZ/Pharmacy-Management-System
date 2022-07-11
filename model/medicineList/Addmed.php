<!-- Modal for adding medicine-->
<div class="modal fade modal-lg"  id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="staticBackdropLabel">Add medicine</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action="medADDlist.php" method="POST" class="row g-1">
        <div class="col-5 p-2">
          <label for="Brand name" class="form-label">Product id</label>
          <input type="text" class="form-control" name="productID" required>
        </div>

        <div class="col-5 p-2">
          <label for="Brand name" class="form-label">Brand Name</label>
          <input type="text" class="form-control" name="Brand_name" required>
        </div>

        <div class="col-5 p-2">
        <label for="unit" class="form-label">Unit</label>
          <input type="text" class="form-control"  name="unit" required>
        </div>

        <div  class="col-5 p-2 selectpicker d-flex flex-column">
        <label for="Type" class="form-label">Type</label>
        <select  class="selectpicker" data-live-search="true" data-live-search="true"  name="Type">
         <option value= selected >Choose..</option>
           <?php 
               $medicine_Type = $pdo->prepare('SELECT MedicineType FROM medicinetype');
               $medicine_Type->execute();
               if($medicine_Type->rowCount() > 0){
                  foreach($medicine_Type as $med):
                  $med_data = $med->MedicineType;
                  echo "<option value='$med_data'>$med_data</option>";
                  endforeach;
               }
           ?>
          </select>
          </div>

        <div  class="col-5 p-2 selectpicker d-flex flex-column">
        <label for="Categories" class="form-label">Categories</label>
        <select  class="selectpicker" data-live-search="true" data-live-search="true" name="Categories">
         <option value= selected >Choose..</option>
           <?php 
               $medicine_Category = $pdo->prepare('SELECT Medicine_Category FROM medicinecategories');
               $medicine_Category->execute();
               if($medicine_Category->rowCount() > 0){
                  foreach($medicine_Category as $medCat):
                  $med_Category = $medCat->Medicine_Category;
                  echo "<option value='$med_Category'>$med_Category</option>";
                  endforeach;
               }
           ?>
          </select>
          </div>

        <div class="col-5 p-2">
          <label for="price" class="form-label">price</label>
          <input type="number" step="0.01" class="form-control" name="price" required>
        </div>

        <div class="col-5 p-2">
          <label for="Quantity" class="form-label">Quantity Per piece</label>
          <input type="number" step="0.01" class="form-control" name="Quantity" required>
        </div>

        <div class="col-5 p-2">
          <label for="expiration" class="form-label">Expiration date</label>
          <input type="date" class="form-control" name="expiration" required>
        </div>

        <div class="col-12 p-2">
      <label for="Description" class="form-label">Description</label>
      <textarea class="form-control" name="description" rows="3"></textarea>
      </div>

        <div class="col-auto form-check ms-2">
          <input type="checkbox" name="prescribe" class="form-check-input" value="Medicine requires prescription">
          <label class="form-check-label" for="prescribe">Medicine requires prescription</label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close  <i class="fa-solid fa-xmark"></i></button>
        <button type="submit" name="submit" class="btn btn-success">Submit  <i class="fa-solid fa-check"></i></button>
      </div>
      </form>
    </div>
  </div>
</div>

