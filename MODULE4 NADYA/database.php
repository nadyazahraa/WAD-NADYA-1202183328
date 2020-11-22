<?php
class database {
    var $host = "127.0.0.1:3308";
    var $username = "root";
    var $password = "NZoktober10";
    var $database = "wad_modul4";
    var $conn;

    function __construct() {
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }

    function register($nama,$email,$phone_number,$password) {
        $register = mysqli_query($this->conn, "INSERT INTO user VALUES ('','$nama','$email','$phone_number','$password')");
        return $register;
    }

    function insert($user_id,$nama_barang,$harga) {
		$insert = mysqli_query($this->conn, "INSERT INTO cart VALUES ('','$user_id','$nama_barang','$harga')");
		return $insert;
	}

    function noDuplicate($email) {
		$noDuplicate = mysqli_query($this->conn, "SELECT * FROM user WHERE email = '$email'");
		if (mysqli_num_rows($noDuplicate)> 0) {
			return false;
		}
		return true;
    }

    function user_read($id) {
		$user_read = mysqli_query($this->conn, "SELECT * FROM user WHERE id = '$id'");
		return $user_read;
    }
    
    function cart_read($id) {
		$cart_read = mysqli_query($this->conn, "SELECT * FROM cart WHERE user_id = '$id'");
		return $cart_read;
    }
    
    function update($nama,$phone_number,$password,$id,$navbarColor) {	
        $update = mysqli_query($this->conn,"UPDATE user SET nama = '$nama', no_hp = '$phone_number', password = '$password' WHERE id = '$id'");
        if (isset($password)) {
            setcookie('password', $password, time() + (60 * 60 * 24 * 5), '/');
        }
        return $update;
	}
    
    function delete($id) {
		$delete = mysqli_query($this->conn,"DELETE FROM cart WHERE id = '$id'");
		return $delete;
    }

    function login($email,$password,$remember) {
        $query = mysqli_query($this->conn, "SELECT * FROM user WHERE email = '$email'");
        $data_user = $query->fetch_array();
        if(password_verify($password,$data_user['password'])) {
            if ($remember) {
                setcookie('email', $email, time() + (60 * 60 * 24 * 5), '/');
                setcookie('nama', $data_user['nama'], time() + (60 * 60 * 24 * 5), '/');
                setcookie('password', $data_user['password'], time() + (60 * 60 * 24 * 5), '/');
                setcookie('user_id', $data_user['id'], time() + (60 * 60 * 24 * 5), '/');
            } 

            if(isset($_COOKIE['navbarColor'])){
                $_SESSION['navbarColor'] = $_COOKIE['navbarColor'];
            }

            $_SESSION['email'] = $email;
            $_SESSION['nama'] = $data_user['nama'];
            $_SESSION['password'] = $data_user['password'];
            $_SESSION['user_id'] = $data_user['id'];
            $_SESSION['is_login'] = TRUE;
            return TRUE;
        }
    }

    function relogin($email) {
        $query = mysqli_query($this->conn, "SELECT * FROM user WHERE email = '$email'");
        $data_user = $query->fetch_array();
        $_SESSION['email'] = $email;
        $_SESSION['nama'] = $data_user['nama'];
        $_SESSION['user_id'] = $data_user['id'];
        $_SESSION['is_login'] = TRUE;
    }
}
?>