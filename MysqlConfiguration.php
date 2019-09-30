<?php

class MysqlConfiguration
{
    private $MysqlConnection;
    public function getMysqlConnection(){
        return $this->MysqlConnection;
    }

// Create connection

    public function __construct()
    {
         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "db";
        $this->MysqlConnection = mysqli_connect($servername, $username, $password, $dbname);

    }

}

// Check connection
$MysqlConfig = new MysqlConfiguration();

if (!$MysqlConfig) {
    die("Connection failed: " . mysqli_connect_error());
        }
else {
    echo "Connected successfully";
    }
var_dump($MysqlConfig);

$sql= "INSERT INTO `user` (`nume`, `prenume`) VALUES ('Andrei',' GIGI')";
if($MysqlConfig->getMysqlConnection()->query($sql) === TRUE) {
    echo "new record created";
} else { echo "error: " . $sql . "<br>" . $MysqlConfig->getMysqlConnection()->error;
}

?>
