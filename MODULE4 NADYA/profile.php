<?php
session_start();
include_once('database.php');
$database = new database();

if(! isset($_SESSION['is_login'])) {
  header('location:login.php');
}

if($_COOKIE['navbarColor'] == "dark"){
    $navColor = "bg-dark";
} else {
    $navColor = "bg-light";
}

$nama = $_SESSION['nama'];
$user_id = $_SESSION['user_id'];
if(isset($_SESSION['user_id']) && $_SESSION['user_id']!="") {
    $data_user =  mysqli_fetch_array($database->user_read($_SESSION['user_id']));
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFILE-beauty</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .bg-custom {
        background-color: #E7E7E7;
        }
    </style>
</head>

<body>
    <header>

    <!-- navbar start here -->
    <nav class="navbar navbar-expand-lg navbar-light text-light <?= $navColor ?> justify-content-between">
        <a class="navbar-brand" href="#">WAD Beauty</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="cart.php"><i style="font-size:20px" class="fa text-dark">&#xf07a;</i></a>
            </li>
            <li class="nav-item active dropdown ">
                <a class="dropdown-toggle ml-2" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">Selamat Datang, <?php echo "$nama"?></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="profile.php">Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <!-- navbar ends here -->

    <!-- script alert -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <?php
        if(isset($_POST['update'])) {

            $navbarColor = $_POST['navbarColor'];
            $email = $_SESSION['email'];
            $nama = $_POST['new_nama'];
            $_SESSION['nama'] = $_POST['new_nama'];
            $phone_number = $_POST['new_phone_number'];
            $password = $_POST['new_password'];
            $confirm_password = $_POST['new_confirm_password'];
            $user_id = $_SESSION['user_id'];
            $cookie_name = 'navbarColor';
            $cookie_value = $_POST['navbarColor'];
            setcookie($cookie_name,$cookie_value);

            if($password == $confirm_password) {
                $password = password_hash($password,PASSWORD_DEFAULT);

                if($database->update($nama,$phone_number,$password,$user_id,$navbarColor)) {
                    echo "<div class=\"alert alert-warning\" role=\"alert\">Update Success!</div>";
                    echo "<script>setTimeout(function() {window.location.href='profile.php'}, 1000);</script>";
                } else {
                    echo "<div class=\"alert alert-warning\" role=\"alert\">Update Failed!</div>"; 
                }
            } else {
                echo "<div class=\"alert alert-warning\" role=\"alert\">Sorry, wrong password :(</div>";
            }
        }
    ?>

    </header>

    <center><h1 class="mt-5 mb-4">Profile</h1></center>

    <form action="" method="POST">
        <div class="container d-flex justify-content-center px-5">  
            <div class="col col-md px-5">

                <!-- email-disabled -->
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-md-2 col-form-label col-form-label-sm"> Email </label>
                    <div class="col-sm-10">
                    <label for="colFormLabelSm" class="col-md-2 col-form-label col-form-label-sm"><?= $data_user['email'] ?></label>
                    </div>
                </div>

                <!-- nama -->
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"> Name </label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control form-control-sm" id="colFormLabelSm" name="new_nama" value="<?= $data_user['nama'] ?>">
                    </div>
                </div>

                <!-- phone number -->
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"> Phone Number </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="new_phone_number" value="<?= $data_user['no_hp'] ?>" required>
                    </div>
                </div>

                <hr>

                <!-- password-confirm start -->
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"> Password </label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control form-control-sm" id="colFormLabelSm" name="new_password">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"> Confirm Password </label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control form-control-sm" id="colFormLabelSm" name="new_confirm_password">
                    </div>
                </div>
                <!-- password-confirm ends -->

                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"> Navbar Color </label>
                    <div class="col-sm-10">
                        <select name="navbarColor" class="form-control form-control-md">
                            <option name="navbarColor" value="light"<?php echo ($navColor == "bg-light") ? "selected" : "" ;?>>Light</option>
                            <option name="navbarColor" value="dark"<?php echo ($navColor == "bg-dark") ?  "selected" : "" ;?>>Dark</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12 mt-3">
                        <button type="submit" name="update" class="btn btn-primary btn-md btn-block">Submit</button>
                        <a href="index.php" class="btn btn-light btn-md btn-block">Cancel</a>
                    </div>
                </div>

                <p class="mt-4 mb-3 text-muted text-center">&copy; 2020 Copyright: <a href="index.php" style="color: primary;">WAD Beauty</a></p>

            </div>
        </div>
    </form>

    <!-- script -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>