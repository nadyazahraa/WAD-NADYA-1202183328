<?php
include('connection.php');
$connect = new connect();
$ID = $_REQUEST['ID'];

if(isset($id) and $id!=""){
    $data =  mysqli_fetch_array($connect->details($id));
  }
?>
 

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETAIL</title>
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
            <h5 class="display-4">Detail Event</h5>
            <p class="lead">This is the detail of your event</p>
        </div>
    </header>
  
    <!-- item card detail start -->
    <div class="py-5 bg-custom"> 
    <div class="container">

        <div class="col-md-4">
            <div class="card shadow mb-3">
                <img src="gambar/<?php echo $data['picture']; ?>" class="card-img-top" alt="Event Poster">
                <div class="card-body">
                    <h2 class="card-title"><?php echo $data['name'];?></h2>
                        <div class="div col col-sm-6">
                            <p class="card-text font-weight-bold">Event Information</p>
                            <p class="card-text"><i class="glyphicon glyphicon-calendar"></i><?php $data['date']; ?></p>
                            <p class="card-text"><i class="glyphicon glyphicon-map-marker"></i><?php $data['place']; ?></p>
                            <p class="card-text"><i class="glyphicon glyphicon-time"></i><?php $data['time']; ?></p>
                        </div>
                        <p class="card-text">Benefit</p>
                        <p class="card-text"><?php echo $data['benefit']; ?></p>
                        <p class="card-text">Category: <?php echo $data['category']?></p>
                        <p class="card-text font-weight-bold">HTM Rp. <?php echo $data['price']?></p>
                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Edit">Edit</button>
                        <a href="delete.php?delId={$data['id']}" class="btn btn-danger" onClick="return confirm('Are you sure to delete this event?');">Delete</a>

                        <!-- modal start here -->
                        <div class="modal fade" id="edit_event" role="dialog">
                            <div class="modal-dialog">

                                <!-- modal content start here-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h5 class="modal-title">EDIT CONTENT EVENT</h5>
                                    </div>

                                <div class="modal-body">
                                    <div class="container">

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
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="inputPicture" aria-describedby="inputGroupFileAddon01" name="upload" value="upload">
                                                                    <label class="custom-file-label" for="inputGroupFile01">Choose picture</label>
                                                                </div>
                                                            </div>
                                                        </div>    

                                                        <!-- radio button -->
                                                        <div><label for="category">Category</label></div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="online" id="event_online" value="Online">
                                                            <label class="form-check-label" for="online">Online</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="offline" id="event_offline" value="Offline">
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
                                                
                                            </div>  
                                        </div>         
                                        <!-- card end here -->
                                    </div>
                                </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>    
    </div>

    </div>
    <!-- item detail card end -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>