<?php
include('connection.php');
$connect = new connect();
include('action.php');

if(isset($_POST['input'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $picture = isset($_POST['picture']) ? $_POST['picture'] : '';
    $category = $_POST['category'];
    $date = $_POST['date'];
    $start =  $_POST['start'];
    $end =  $_POST['end'];
    $place = $_POST['place']; 
    $price = $_POST['price'];
    $benefit = implode(",", $_POST['benefit']);

    if($conn->input($name,$description,$picture,$category,$date,$start,$end,$place,$benefit)) {
        header('location:home.php');
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
<style>
    .bg-custom {
      background-color: #E7E7E7;
    }
</style>
</head>

<body>
    <!-- navbar -->
    <header>
        <nav class="navbar navbar-dark bg-dark shadow p-3 mb-3">
            <a class="navbar-brand">EAD EVENTS</a>
            <form class="form-inline">
                <a href="home.php" class="navbar-link mr-sm-2" style="color: white;">Home</a>  
                <a class="btn btn-outline-info my-2 my-sm-0">Create Event(s)</a>
            </form>
        </nav>

        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h5 class="display-4">Input Event</h5>
            <p class="lead">Please fill the form below</p>
        </div>
    </header>

    <!-- form create event -->
<form action="" method="POST" enctype="multipart/form-data">    
    <div class="py-5 bg-custom">   
        <div class="container">
            <div class="row">

                <!-- card start here -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark"></div>
                            <div class="card-body" style="margin-bottom: 90px;">

                                    <div class="form-group">
                                        <label for="Name">Name</label>
                                        <input type="name" class="form-control" id="event_name" name="name">
                                    </div>

                                    <div class="form-group">
                                        <label for="textarea">Description</label>
                                        <textarea class="form-control" id="description" rows="4" name="description"></textarea>
                                    </div>

                                    <div class="mb-3"> 
                                        <div class="input-group-md">
                                        <label for="upload_gambar">Upload Gambar</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputPicture" aria-describedby="inputGroupFileAddon01" name="upload" value="upload">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose picture</label>
                                            </div>
                                        </div>
                                    </div>    

                                    <!-- radio button -->
                                    <div><label for="category">Category</label></div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="category" id="event_online" value="Online">
                                        <label class="form-check-label" for="online">Online</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="category" id="event_offline" value="Offline">
                                        <label class="form-check-label" for="offline">Offline</label>
                                    </div>  
                            </div>
                    </div>
                </div>    
                <!-- card end here -->

                <!-- card start here -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark"></div>
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="date" class="form-control" id="event_date" name="date">
                                </div>

                                <!-- select -->
                                <div class="mb-3">
                                    <div class="form-row">
                                        <div class="col">
                                        <label for="time">Start</label>
                                            <select id="inputState" class="form-control" name="start">
                                            <option value="19:00" selected>19:00</option>
                                            <option value="18:00">18:00</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                        <label for="time">End</label>
                                            <select id="inputState" class="form-control" name="end">
                                            <option value="20:00" selected>20:00</option>
                                            <option value="20:00">19:00</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>    
                                
                                <div class="form-group">
                                    <label for="place">Place</label>
                                    <input type="text" class="form-control" id="event_place" name="place">
                                </div>

                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="event_price" name="price">
                                </div>

                                <!-- checkboxes -->
                                <div><label for="benefit">Benefit</label></div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="event_s" value="Snacks" name="benefit[]">
                                        <label class="form-check-label" for="snacks">Snacks</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="event_c" value="Certificate" name="benefit[]">
                                        <label class="form-check-label" for="certificate">Certificate</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="event_so" value="Souvenir" name="benefit[]">
                                        <label class="form-check-label" for="souvenir">Souvenir</label>
                                    </div>

                                    <!-- button -->
                                    <div class="container p-2 d-flex flex-row justify-content-center">
                                        <div class="mr-3">
                                            <button class="btn btn-secondary" type="button" value="Input" name="input">Submit</button>
                                        </div>
                                        <div class="ml-3">
                                            <a href="home.php" class="btn btn-danger" value="Reset">Cancel</a>
                                        </div>
                                    </div>

                            </div>
                    </div>
                </div>        
                <!-- card end here -->

            </div>
        </div>        
    </div>   
</form>    
</body>
</html>