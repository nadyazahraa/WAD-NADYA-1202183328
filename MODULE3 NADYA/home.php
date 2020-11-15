<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
</head>

<body>
    <!-- navbar -->
    <header>
        <nav class="navbar navbar-dark bg-dark shadow p-3 mb-3">
            <a class="navbar-brand">EAD EVENTS</a>
            <form class="form-inline">
                <span class="navbar-text mr-sm-2">Home</span>
                <a href="create_event.php" class="btn btn-outline-light my-2 my-sm-0">Create Event(s)</a>
            </form>
        </nav>

        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h2 class="display-4">Welcome to EAD Events!</h2>
        </div>
    </header>

    <!-- event detail --> 
    <div class="container py-5">
        <div class="row">

            <?php
            $select = "SELECT * FROM modul3_crud";
            $con = mysqli_connect("127.0.0.1:3308","root","NZoktober10","wad_module3_nadya");
            $query = mysqli_query($con,$select);

            if(!isset($data)) {
                echo "<p class=\"mr-auto ml-auto\">You don't have any event today :)</p>";
            } else {
                while($data = mysqli_fetch_array($query)) {

                    echo "<div class=\"col-md-4\">";
                        echo "<div class=\"card shadow mb-3\">";
                            echo "<img src=\"gambar/".$data['picture']."\" class=\"card-img-top\" alt=\"Event Poster\">";
                            echo "<div class=\"card-body\">";
                                echo "<h2 class=\"card-title\"><?php echo{$data['name']}; ?></h2>";
                                echo "<p class=\"card-text\"><i class=\"glyphicon glyphicon-calendar\"></i><?php echo {$data['date']}; ?></p>";
                                echo "<p class=\"card-text\"><i class=\"glyphicon glyphicon-map-marker\"></i><?php echo {$data['place']}; ?></p>";
                                echo "<p class=\"card-text\">Category: <?php echo {$data['category']}; ?></p>";
                            echo "</div>";
                            echo "<div class=\"card-footer text-right\">";
                                echo "<a href=\"event_details.php?id={$data['id']}\"><i class=\"btn btn-secondary\"></i>Details</a>";
                            echo "</div>";    
                        echo "</div>";
                    echo "</div>";
                }
            } 
            ?>

        </div>
    </div>

</body>
</html>