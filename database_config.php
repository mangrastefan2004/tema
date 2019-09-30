<?php

class database_config
{
    public $conn;
    public $sql;

// Create connection

    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db";
        $this->conn = mysqli_connect($servername, $username, $password, $dbname);

    }


}


// Check connection
$connection = new database_config();

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
        }
else {
    echo "Connected successfully";
    }


?>
