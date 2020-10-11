<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Booking</title>
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
                        <a class="nav-link" href="Booking.php">Booking</a>
                    </li>
        </nav>

        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">EAD HOTEL</h1>
            <p class="lead">Please double-check your reservation details.</p>
        </div>

    </header>

    <?php

        $booking_number = rand(10,100);
        $name = $_POST['name'];
        $checkIn = $_POST['checkIn'];
        $duration = $_POST['duration'];
        $roomType = $_POST['roomType'];
        $services = $_POST['services'];
        $phoneNumber = $_POST['phoneNumber'];

        $checkOut = date('Y-m-d',strtotime('+'.$duration.'day',strtotime($checkIn)));

            if ($roomType == "Standard") {
                $total = ($duration*90)+20;
            } else if ($roomType == "Superior") {
                $total = ($duration*150)+20;
            } else if ($roomType == "Luxury") {
                $total = ($duration*200)+20;
            }
    ?>

    <div class="container p-5 d-flex flex-column justify-content-center align-items-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Booking Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Check-in</th>
                    <th scope="col">Check-out</th>
                    <th scope="col">Room Type</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Service</th>
                    <th scope="col">Total Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php echo "<th>".$booking_number."</th>"; ?>
                    <td> <?= $name ?> </td>
                    <td> <?= $checkIn ?> </td>
                    <td> <?= $checkOut ?> </td>
                    <td> <?= $roomType ?> </td>
                    <td> <?= $phoneNumber ?> </td>
                    <td> <?= $services ?> </td>
                    <?php echo "<td> $".$total."</td>"; ?>
            </tbody>
        </table>
        <div style="text-align: center;">
</body>

</html>