<?php 
    include('connection.php');
    $connect = new connect();

    $name = $_POST['name'];
    $description = $_POST['description'];
    $picture = isset($_POST['picture']) ? $_POST['picture'] : '';
    $category = $_POST['category'];
    $date = $_POST['date'];
    $start =  $_POST['start']; 
    $end = $_POST['end'];
    $place = $_POST['[place'];
    $price = $_POST['price'];
    $benefit = implode(",", $_POST['benefit']);

    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['picture']['name'];
    $ukuran = $_FILES['picture']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if(!in_array($ext,$ekstensi) ) {
        header("location:create_event.php?alert=gagal_ekstensi");
    }else{
        if($ukuran < 1044070){		
            $xx = $rand.'_'.$filename;
            move_uploaded_file($_FILES['upload']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
            mysqli_query($conn, "INSERT INTO modul3_crud VALUES('','$name','$description','$picture','$category','$date','$start','$end','$place','$price','$benefit')");
            header("location:home.php?alert=Picture upload!");
        }else{
            header("location:create_event.php?alert=Failed to upload!");
        }
    }
    ?>