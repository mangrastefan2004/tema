<?php

class MysqlConfiguration
{
    private $connection;

    public function getConnection(){
        return $this->connection;
    }

// Create connection

    public function __construct()
    {
         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "db";
        $this->connection = mysqli_connect($servername, $username, $password, $dbname);

    }

}

// Check connection
$MysqlConfiguration = new MysqlConfiguration();

if (!$MysqlConfiguration) {
    die("Connection failed: " . mysqli_connect_error());
        }
else {
    echo "Connected successfully";
    }


$sql= "INSERT INTO `user` (`nume`, `prenume`) VALUES ('Andrei',' GIGI')";
if($MysqlConfiguration->getConnection()->query($sql) === TRUE) {
    echo "new record created";
} else { echo "error: " . $sql . "<br>" . $MysqlConfiguration->getConnection()->error;
}

?>
