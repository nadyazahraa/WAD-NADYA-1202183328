<?php
class database {
    var $host = "127.0.0.1:3308";
    var $username = "root";
    var $password = "NZoktober10";
    var $database = "user";
    var $conn;

    function __construct() {
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }

    function register($username,$password,$name) {
        $insert = mysqli_query($this->conn, "INSERT INTO user_tb VALUES ('','$username','$password','$name')");
        return $insert;
    }

    function login($username,$password,$remember) {
        $query = mysqli_query($this->conn, "SELECT * FROM user_tb WHERE username = '$username'");
        $data_user = $query->fetch_array();
        if(password_verify($password,$data_user['password'])) {
            if ($remember) {
                setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
                setcookie('name', $data_user['name'], time() + (60 * 60 * 24 * 5), '/');
            }
            $_SESSION['username'] = $username;
            $_SESSION['name'] = $data_user['name'];
            $_SESSION['is_login'] = TRUE;
            return TRUE;
        }
    }

    function input($product_name,$product_price,$product_quantity,$product_category,$product_description,$gambar) {
        $input = mysqli_query($this->conn, "INSERT INTO input_barang VALUES ('','$product_name','$product_price','$product_quantity','$product_category','$product_description','$gambar')");
        return $input;
    }

    function delete($product_code) {
        $delete = mysqli_query($this->conn,"DELETE FROM input_barang WHERE product_code = '$product_code'");
        return $delete;
    }

    function update($product_name,$product_price,$product_quantity,$product_category,$product_description,$gambar) {
        $data_barang = mysqli_query($this->conn,"UPDATE input_barang SET product_name = '$product_name', product_price = '$product_price', product_quantity = '$product_quantity', prooduct_category = '$product_category', product_description = '$product_description', gambar = '$xx' WHERE product_code = '$product_code'");
        return $data_barang;
    }

    function barang_read($product_code) {
        $barang_read = mysqli_query($this->conn, "SELECT * FROM input_barang WHERE product_code = '$product_code'");
        return $barang_read;
    }

    function relogin($username) {
        $query = mysqli_query($this->conn, "SELECT * FROM user_tb WHERE username = '$username'");
        $data_user = $query->fetch_array();
        $_SESSION['username'] = $username;
        $_SESSION['name'] = $data_user['name'];
        $_SESSION['is_login'] = TRUE;
    }
}
?>