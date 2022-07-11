<?php require_once './inc/session.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="wrapper">
    <div class="container containlogin" id="container">
        <div class="form-container sign-up-container">
        <form action="./model/login/loginValidation.php" method="POST">
                <h1>Login</h1>
                <div class="social-container">
                   <p><i class="fa-solid fa-apple-whole text-warning"></i> ST. Anne pharmacy Inventory and Customer Information System</p>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-success" id="basic-addon1"><i class="fa-solid fa-user text-white"></i></span>
                    <input type="text"  placeholder="Username" name="staff_input" class="form-control" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-success" id="basic-addon1"><i class="fa-solid fa-lock text-white"></i></span>
                    <input type="password"  placeholder="Password" name="staff_password" class="form-control" required>
                </div>
                <button type ="submit" name="pharma_submit">Login</button>
            </form>
        </div>

        <div class="form-container sign-in-container">
            <form action="./model/login/loginValidation.php" method="post">
                <h1>Login</h1>
                <div class="social-container d-flex">
                   <p><i class="fa-solid fa-apple-whole text-warning"></i> ST. Anne pharmacy Inventory and Customer Information System</p>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-success" id="basic-addon1"><i class="fa-solid fa-user text-white"></i></span>
                    <input type="text"  placeholder="Username" name="manager_input" class="form-control" required value ="<?php echo (isset($_POST['manager_input']))?>">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-success" id="basic-addon1"><i class="fa-solid fa-lock text-white"></i></span>
                    <input type="password"  placeholder="Password" name="manager_password" class="form-control" required value ="<?php echo (isset($_POST['manager_password']))?>">
                </div>
                <button type="submit" name="m-submit">login</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome staff!</h1>
                    <p>Enter your personal details and password or click the button if you are a Manager.</p>
                    <button class="ghost" id="signIn">Login as Manager</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Managers!</h1>
                    <p>Enter your personal details and password or click the button if you are a Staff.</p>
                    <button class="ghost" id="signUp">Login as Staff</button>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-programmer mt-5 text-secondary">
            <strong>&copy Harvy M. Gascon 2022</strong>
        </div>
<?php 
require_once './inc/footer.php';
require_once './inc/popmsg.php';