<!DOCTYPE html>
<html lang="en"> 

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER-beauty</title>
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
            <form class="form-inline">
                <span class="navbar-text mr-sm-2">Register</span>  
                <a href="register.php" class="navbar-link mr-sm-2" style="color: black;">Login</a>
            </form>
        </nav>

        <div style="height:10px; background-image: linear-gradient(to right, #00b8f0 , #009d56, #ffcc29);"></div>

        <!-- script alert -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <!-- alert-warning start -->
        <?php
            include_once('database.php');
            $database = new database();

            if (isset($_POST['register'])) {
            
                $nama = $_POST['nama'];
                $email = $_POST['email'];
                $phone_number = $_POST['phone_number'];
                $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
                $confirm_password = $_POST['confirm_password'];
                
                if ($database->register($nama,$email,$phone_number,$password)) {
                    echo "<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">Registration Success!</div>";
                    echo "<script>setTimeout(function() {window.location.href='login.php'}, 1000);</script>";
                } else {
                    if($database->noDuplicate($email)) {
                        echo "<div class=\"alert alert-warning\" role=\"alert\">Registration Failed!</div>";
                      } else {
                        echo "<div class=\"alert alert-warning\" role=\"alert\">Sorry, choose another email :(</div>";
                      }
                    }

            } else {
                echo "<div class=\"alert alert-warning\" role=\"alert\">Wrong Password!</div>";
            }
        ?>
            <!-- alert-warning end -->
        

    </header>

    <main role="main">
    <form class="form-group" action="" method="POST">
        <div class="container d-flex mt-5 p-5 justify-content-center align-items-center">
            <div class="shadow p-5 bg-white rounded" style="width: 40%;">
                <div class="col col-md">

                    <center><h2>Register</h2></center>
                    <hr>

                    <!-- name -->
                    <div class="form-group">
                        <label for="nama">Name</label>
                        <input type="text" id="nama" class="form-control" name="nama" required>
                    </div>

                    <!-- email -->
                    <div class="form-group">
                        <label for="username">Email</label>
                        <input type="text" id="email" class="form-control" name="email" required>
                    </div>

                    <!-- phone number -->
                    <div class="form-group">
                        <label for="username">Phone Number</label>
                        <input type="text" id="phone_number" class="form-control" name="phone_number" required>
                    </div>

                    <!-- password -->
                    <div class="form-group">
                        <label for="password">Password</label>    
                        <input type="password" id="password" class="form-control" name="password" required>
                    </div>

                    <!-- password confirm -->
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" id="confirm_password" class="form-control" name="confirm_password" required>
                    </div>

                    <div class="container d-flex flex-row justify-content-center">
                        <button type="submit" class="btn btn-md btn-primary" name="register" value="submit">Sign-up</button>
                    </div>

                    <center><p class="mt-3 text-muted">Already Have an Account? <a href="login.php" style="color: primary;">LOGIN</a></p></center>

                </div>
            </div>
        </div>  
    </form>
    </main>

</body>
</html>