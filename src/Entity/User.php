<?php

namespace App\Entity;


class User{

    //models = Array
    private $gatewayUser;
    private $admin;
    private $usr;

    public function getModels(){
        return models;
    }

    public function isAdmin(){
        return $this->admin;
    }

    public function getName(){
        return $this->usr;
    }

    public function __construct($usr, $pass){
        $this->gatewayUser = new GatewayUser();

        if($this->isValidLogin($usr, $pass)){
            $this->admin = $this->isAdminUser($usr);
            $this->usr = $usr;
            return true;
        }
        return false;
    }

    private function isAdminUser($usr){
        return $this->gatewayUser->isAdmin($usr);
    }

    private function isValidLogin($usr, $pass){
        return $this->gatewayUser->isValidLogin($usr,$pass);
    }
}