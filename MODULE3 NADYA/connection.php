<?php
class connect {
    var $host = "127.0.0.1:3308";
    var $username = "root";
    var $password = "NZoktober10";
    var $database = "user";
    var $conn;

    function __construct() {
        $this->conn = mysql_connect($this->host, $this->username, $this->password, $this->database);
    }

    function input($name,$description,$picture,$category,$date,$start,$end,$place,$price,$benefit) {
        $insert = mysqli_query($this->conn, "INSERT INTO modul3_crud VALUES ('','$name','$description','$picture','$category','$date','$start','$end','$place','$price','$benefit')");
        return $insert;
    }

    function delete($id) {
        $delete = mysqli_query($this->conn,"DELETE FORM modul3_crud WHERE ID = $ID");
        return $delete;
    }

    function details($id) {
        $event = mysqli_query($this->conn, "SELECT * FROM modul3_crud WHERE ID = $ID");
        return $event;
    }
}
?>