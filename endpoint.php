<?php


interface iEndpointConfiguration{
    public function GetInformation();
    public function PostInformation();
    public function PutInformation();
    public function DeleteInformation();

}

class EndpointConfiguration implements iEndpointConfiguration  {

private $configuration;


    public function GetInformation(){
    return $this->configuration;
    }

    public function PostInformation(){
    return $this->configuration;
    }

    public function PutInformation(){
        return $this->configuration;
    }

    public function DeleteInformation(){
        return $this->configuration;
    }
}


$configuration= new MysqlConfiguration();
$mysqlAlteration= new EndpointConfiguration($configuration);

$sql= "SELECT FROM `user` (`username`)";
if($mysqlAlteration->GetInformation()->query($sql) === TRUE) {
    var_dump($sql);
} else { echo "error: " . $sql . "<br>" . $mysqlAlteration->GetInformation()->error;
}
?>