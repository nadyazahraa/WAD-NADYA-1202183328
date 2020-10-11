<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08"
                aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active">Booking</a>
                    </li>
        </nav>

        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">EAD HOTEL</h1>
            <p class="lead">Please fill the reservation form below</p>
        </div>

    </header>

    <form class="bg-light" action="My_Booking.php" method="POST">
        <div class="container p-5 d-flex justify-content-center align-items-center">
            <div class="col col-lg-4 d-flex justify-content-left align-items-left">
                <div class="shadow p-4 lg-5 bg-white rounded">

                    <div class="form-group">
                        <div class="mb-3">
                            <label for="inputNama">Name</label>
                            <input class="form-control form-control-md" type="nama" id="inputNama" name="name">
                        </div>

                        <div class="mb-3">
                            <label for="inputDate">Check-in</label>
                            <input class="form-control form-control-md" type="date" id="inputDate" name="checkIn">
                            <script type="text/javascript">
                                $(function () {
                                    $('datetimepicker2').datetimepicker({
                                        locale: 'ru'
                                    });
                                });
                            </script>
                        </div>

                        <div class="mb-3">
                            <label for="inputDuration">Duration</label>
                            <input class="form-control form-control-md" type="duration" id="inputDuration" name="duration">
                            <small id="keterangan" class="form-text text-muted">Day(s)</small>
                        </div>

                        <div class="mb-3">
                            <label for="roomType">Room Type</label>
                            <select class="custom-select mr-md-5" id="inLineFormCustomSelect" name="roomType">
                                <option value="Standard">Standard</option>
                                <option value="Superior">Superior</option>
                                <option value="Luxury">Luxury</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="addService">Add Service(s)
                                <small id="keterangan1" class="form-text text-muted">$20/service</small>
                            </label>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="inputService1" name=services value="Room Service">
                                <label class="form-check-label">
                                    Room Service
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="inputService2" name=services value="Breakfast">
                                <label class="form-check-label">
                                    Breakfast
                                </label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="phoneNumber">Phone Number</label>
                            <input class="form-control form-control-md" type="phone" id="inputPhoneNumber" name="phoneNumber">
                        </div>

                        <button class="btn btn-secondary btn-md btn-block" type="submit" value="submit"> Book </button>

                    </div>
                </div>
            </div>

            <div class="container p-3 d-flex justify-content-right align-items-right">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="room1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="oasis.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="milano.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
    </form>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>