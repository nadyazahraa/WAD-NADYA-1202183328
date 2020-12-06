<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UPDATE</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

  <style>
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
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="dashboard.php">Dashboard <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active dropdown ">
                <a class="dropdown-toggle ml-2" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;"></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="profile.php">Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>
        </ul>
      </nav>

    <div style="height:10px; background-image: linear-gradient(to right, #00b8f0 , #009d56, #ffcc29);"></div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h2 class="display-4">WELCOME</h2>
      <p class="lead">What do you want to add today?</p>
    </div>

  </header>

  <div class="py-5 bg-custom">

        <form class="form-group" action="" method="POST">
          <div class="container p-3 d-flex flex-row justify-content-center align-items-start">

            <!-- image content -->
              <div class="row">
                <div class="container p-3 justify-content-center">
                  <img src="egg chair.jpg" width="450" height="550" class="rounded float img-fluid" alt="Responsive Image">
                </div>

                  <!-- file button content -->
                    <div class="container d-flex p-2 justify-content-center align-items-center">
                      <div class="input-group-md">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="update" value="upload">
                          <label class="custom-file-label" for="inputGroupFile01">Choose picture</label>
                        </div>
                      </div>
                    </div>  

              </div>  

              <div class="container p-3">
                <div class="d-flex shadow p-3 bg-white rounded align-items-start">
                  <div class="col col-md">

                    <!-- form content -->
                      <div class="form-group">
                        <label for="Name">Product Name</label>
                        <input type="name" class="form-control" id="productname" name="new_name" value="<?php $data_user['product_name']; ?>">
                      </div>

                      <div class="form-group">
                        <label for="Name">Price</label>
                        <input type="price" class="form-control" id="price" name="new_price" placeholder="IDR" value="<?php $data_user['product_price']; ?>">
                      </div>

                      <div class="form-group">
                        <label for="Name">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="new_quantity" min="1" max="1000">
                      </div>

                      <label for="category">Category</label>
                      <select class="form-control mb-3" id="category" name="new_category">
                        <option name="category" value="Gardening" <?php echo ($data_user == 'Gardening') ? "selected" : "" ;?>>Gardening</option>
                        <option name="category" value="Furniture" <?php echo ($data_user == 'Gardening') ? "selected" : "" ;?>>Furniture</option>
                        <option name="category" value="Kitchen" <?php echo ($data_user == 'Gardening') ? "selected" : "" ;?>>Kitchen</option>
                        <option name="category" value="Electronic" <?php echo ($data_user == 'Gardening') ? "selected" : "" ;?>>Electronic</option>
                      </select>

                      <div class="form-group">
                        <label for="textarea">Add Description</label>
                        <textarea class="form-control" id="description" rows="3" name="new_description"></textarea>
                      </div>

                      <!-- button content -->
                      <div class="container d-flex flex-row justify-content-center">
                        <div class="mr-3">
                          <button type="submit" name="update" class="btn btn-secondary btn-md-6">Submit</a>
                        </div>
                        <div class="ml-3">
                          <a href="login.php" class="btn btn-danger btn-md-6">Cancel</a>
                        </div>
                      </div>

                  </div>
                </div>    
              </div>  
            </div>  

          </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    </script>
</body>
</html>