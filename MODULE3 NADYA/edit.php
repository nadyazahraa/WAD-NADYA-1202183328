<?php
include_once('db_con.php');

if(isset($_POST['update'])) {

    $name = $_POST['name'];
    $description = $_POST['description'];
    $picture = $_POST['picture'];
    $category = $_POST['category']; 
    $date = $_POST['date'];
    $start =  $_POST['start'];
    $end = $_POST['end'];
    $place = $_POST['[place'];
    $price = $_POST['price'];
    $benefit = explode(",", $_POST['benefit']);

    $query = "UPDATE modul3_crud SET name = '$name', description = '$description', picture = '$picture', category = '$category', date = '$date', start = '$start', end = '$end', place = '$place', price = '$price', benefit = '$benefit' WHERE id = '$id'";
    $update = mysqli_query($database,$query);
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
                <span class="navbar-text mr-sm-2">Home</span>
                <a class="btn btn-outline-light my-2 my-sm-0">Create Event(s)</a>
            </form>
        </nav>

        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h5 class="display-4">Input Event</h5>
            <p class="lead">Please fill the form below</p>
        </div>
    </header>

    <!-- modal edit start -->
    <div class="py-5 bg-custom">  
        <div class="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">EDIT CONTENT EVENT</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                    <form class="form-group" action="" method="POST" enctype="multipart/form-data">
                        <div class="container p-3 d-flex justify-content-center align-items-center">
                            <div class="row">
                                <div class="shadow p-3 bg-white rounded">
                                    <div class="col col-md">

                                        <div class="form-group">
                                            <label for="Name">Name</label>
                                            <input type="name" class="form-control" id="event_name" name="name">
                                        </div>

                                        <div class="form-group">
                                            <label for="textarea">Description</label>
                                            <textarea class="form-control" id="description" rows="4" name="description"></textarea>
                                        </div>

                                        <div class="input-group-md">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputPicture" aria-describedby="inputGroupFileAddon01" name="upload" value="upload">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose picture</label>
                                            </div>
                                        </div>

                                        <!-- radio button -->
                                        <div class="mb-3"> 
                                        <label for="category">Category</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="online" id="event_online" value="Online">
                                                <?php if($data['category']=='online') echo 'checked'?>
                                                <label class="form-check-label" for="online">Online</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="offline" id="event_offline" value="Offline">
                                                <?php if($data['category']=='offline') echo 'checked'?>
                                                <label class="form-check-label" for="offline">Offline</label>
                                            </div>
                                        </div>    

                                        <div class="form-group">
                                            <label for="date">Date</label>
                                            <input type="date" class="form-control" id="event_date" name="date">
                                        </div>

                                        <!-- select -->
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

                                        <div class="form-group">
                                            <label for="place">Place</label>
                                            <input type="text" class="form-control" id="event_place" name="place">
                                        </div>

                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input type="text" class="form-control" id="event_price" name="price">
                                        </div>

                                        <!-- checkboxes -->
                                        <label for="benefit">Benefit</label>
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
                                        <div class="container p-3 d-flex flex-row justify-content-center">
                                            <div class="mr-3">
                                                <button class="btn btn-secondary btn-md-6" type="submit" value="submit" name="input">Submit</button>
                                            </div>
                                            <div class="ml-3">
                                                <a href="home.php" class="btn btn-danger btn-md-6">Cancel</a>
                                            </div>
                                        </div>

                                    </div>
                                </div> 
                            </div>
                        </form>  
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>

                </div>
            </div>
        </div>
    </div> 

</body>
</html>