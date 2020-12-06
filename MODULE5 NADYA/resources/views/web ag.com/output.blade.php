<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OUTPUT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

    <style>
        .navbar-custom {
            background-color: #E7E7E7;
        }

        .bg-custom {
            background-color: #E7E7E7;
        }
    </style>

</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light text-dark justify-content-between"> <a href="https://ibb.co/bWpNWkM"><img src="https://i.ibb.co/TvzPvsx/logo-ag.png" alt="logo-ag" border="0"  width="100px"></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active dropdown mr-5">
                    <a class="dropdown-toggle mr-2" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;"></a>
                    <span>Dashboard</span>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="input.blade.php">Input</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>

        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">THANK YOU</h1>
            <p class="lead">Your item already set</p>
        </div>

    </header>

    <div class="container p-5 d-flex flex-column justify-content-center align-items-center">
        <table class="table" style="text-align: center;">
            <thead>
                <tr>
                    <th scope="col">Item</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <!-- <th scope="col">Picture</th> -->
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach($barang as $data)
                <tr>
                    <td> {{ $data->product_code }} </td>
                    <td> {{ $data->product_name }} </td>
                    <td> {{ $data->product_price }} </td>
                    <td> {{ $data->product_quantity }} </td>
                    <td> {{ $data->product_category }} </td>
                    <td> {{ $data->product_description }} </td>
                    <!-- <td> <img src="picture/ $data['gambar'];" width="100" /> </td> -->
                    <td> <a href="/barang/edit/{{ $data->id }}" class="btn btn-secondary btn-md-6">EDIT</a>
                         <a href="/barang/delete/{{ $data->id }}" class="btn btn-danger btn-md-6" onClick="return confirm('Are you sure to delete this user?')">DELETE</a>
                 </td>
                </tr>
                @endforeach
            </tbody>
        </table>

<!-- script -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>