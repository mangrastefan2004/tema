<?php


interface UsersControllerInterface{
    public function GetInformation();
    public function PostInformation();
    public function PutInformation();
    public function DeleteInformation();

}

class UsersController implements UsersControllerInterface  {

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

    public function getUser($username){

        $username= new MysqlConfiguration();

        $sql= "SELECT FROM `user` (`username`)";

        if($username->getUser()->query($sql) === TRUE) {

            var_dump($sql);

        } else { echo "error: " . $sql . "<br>" . $username->getUser()->error;}
    }
}


?>