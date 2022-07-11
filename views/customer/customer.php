<?php 
    require_once '../../inc/header.php';
    require_once '../../inc/config.php';
    require_once '../../inc/session.php';
    require_once '../sidenav/sidenav.php';
    require_once 'pagination.php';
    require_once 'customerSearch.php';
?>

<div class="wrapp d-flex justify-content-around px-5 mt-2 ">

<div class="wrapp d-flex justify-content-around px-5 mt-2 ">

<div class="card w-25 me-3">
  <div class="card-body">
  <form action="addCustomer.php" method="POST">
    <div class="form-group p-3">
        <h5 class=" text-center">New Customer</h5><br>
        <label for="first name" class="mb-2 text-center">Name</label>
        <input type="text" class="form-control mb-4" name="name" placeholder="Fullname" required>

        <label for="username" class="mb-2 text-center">Age</label>
        <input type="number" class="form-control mb-4" name="age" placeholder="age" required>

        <label for="password" class="mb-2 text-center">Gender</label>
        <input type="text" class="form-control mb-4" name="gender" placeholder="gender" required>

        <label for="Confirm password" class="mb-2 text-center">Address</label>
        <input type="text" class="form-control mb-4" name="address" placeholder="address" required>
    </div>

    <div class="form-group d-block">
      <input type="submit" name ="submit" class="btn btn-success col-12"></input>
    </div>
</form>
  </div>
</div>

<!-- Medicine Type Data -->
<div class="card w-75">
        <div class="card-header d-flex justify-content-between align-items-end">
        <small class="pt-2">page <?php echo $page ?> out of <?php echo $number_of_page?></small>

        <form action="customer.php" method="POST" class="d-flex justify-content-end">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search" name="search_customer">
          <input type='submit' name='customer_search' class="btn btn-success">
        </div>

        </form>

        </div>
        <div class="card-body">
        <table class="table table-sm table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
                <?php require_once 'customerData.php'?>
        </tbody>
      </table>
      <!-- ==== Pagination  ====== -->
      <nav aria-label="Page navigation">
        <ul class="pagination"> 
        <li class="page-item"><a class="page-link" href="customer.php?page=<?php echo $page-1?>"><i class="fa-solid fa-angles-left"></i> Previous</a></li>
        <li class="page-item d-flex"><?php echo get_pagination_links($page, $number_of_page,'customer.php');?></li>
          <li class="page-item"><a class="page-link" href="customer.php?page=<?php if(isset($_GET['page'])){echo $_GET['page']+1;}else{echo $page;}?>">Next <i class="fa-solid fa-angles-right"></i></a></li>
          </ul>
      </nav>
      </div>
</div>

</div>

</div>



<?php 
      require_once '../../inc/footer.php';
      require_once '../../inc/popmsg.php'; 
      ?>