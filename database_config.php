<?php

class database_config
{
    private $conn;
    public function getConn(){
        return $conn;
    }

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


$sql= "INSERT INTO `user` (`nume`, `prenume`) VALUES ('Andrei',' GIGI')";
if($connection->getConn()->mysqli_query($sql) === TRUE) {
    echo "new record created";
} else { echo "error: " . $sql . "<br>" . $connection->error;
}

?>
