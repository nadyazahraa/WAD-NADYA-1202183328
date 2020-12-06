<?php
session_start(); 
include_once('database.php');
$database = new database();

if(isset($_SESSION['is_login'])) {
    header('location:index.php');
}

if(isset($_COOKIE['email'])) { 
    $database->relogin($_COOKIE['email']);
    header('location:index.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN-beauty</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

    <style>
        .bg-custom {
            background-color: #d7fffd;
        }

        .navbar-custom {
        background-color: #E7E7E7;
        }
    </style>
</head>

<body class="bg-custom">
    <header>

        <nav class="navbar navbar-custom navbar-light">
        <a class="navbar-brand " href="#">WAD Beauty</a>
            <form action="" class="form-inline">
                <span class="navbar-text mr-sm-2">Login</span>  
                <a href="register.php" class="navbar-link mr-sm-2" style="color: black;">Register</a>
            </form>
        </nav>

        <div style="height:10px; background-image: linear-gradient(to right, #00b8f0 , #009d56, #ffcc29);"></div>

        <!-- script alert -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <!-- alert-warning start -->
        <?php
            if(isset($_POST['login'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
            
                if(isset($_POST['remember'])) {
                    $remember = TRUE;
                } else {
                    $remember = FALSE;
                }
            
                if($database->login($email,$password,$remember)) {
                    echo "<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">Login Success!</div>";
                    echo "<script>setTimeout(function() {window.location.href='index.php'}, 2000);</script>";
                } else {
                    echo"<div class=\"alert alert-warning\" role=\"alert\">Login Failed!</div>";
                    echo "<script>setTimeout(function() {window.location.href='index.php'}, 2000);</script>";
                }
            }
        ?>

    </header>

    <form action="" method="POST">
        <div class="container d-flex mt-5 p-5 justify-content-center align-items-center">
            <div class="shadow p-5 bg-white rounded" style="width: 40%;">
                <div class="col col-md">

                    <center><h2>Login</h2></center>
                    <hr>

                    <!-- email -->
                    <div class="form-group">
                        <label for="username">Email</label>
                        <input type="text" id="username" class="form-control" placeholder="Email" name="email" required>
                    </div>

                    <!-- password -->
                    <div class="form-group">
                        <label for="password">Password</label>    
                        <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
                    </div>

                    <!-- checkbox -->
                    <div class="container d-flex flex-row justify-content-center">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="remember-me" name="remember">
                            <label class="form-check-label">Remember me
                            </label>
                        </div>
                    </div>

                    <div class="container d-flex flex-row justify-content-center">
                        <button class="btn btn-md btn-primary" type="submit" value="submit" name="login">Login</button>
                    </div>

                    <center><p class="mt-3 text-muted">Don't Have an Account? <a href="register.php" style="color: primary;">REGISTER</a></p></center>
                    
                </div>    
            </div>
        </div>
    </form>
        
</body>
</html>