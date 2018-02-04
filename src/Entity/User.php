<?php

namespace App\Entity;


use App\Gateway\GatewayUser;

class User{

    //models = Array
    private $gatewayUser;
    private $admin;
    private $usr;
    private $id;

    public function getModels(){
        return models;
    }

    public function isAdmin(){
        return $this->admin;
    }

    public function getID(){
        return $this->id;
    }

    public function getName(){
        return $this->usr;
    }

    public function __construct(){
        $this->gatewayUser = new GatewayUser();
    }

    public function connectUser($usr, $pass){
        if($this->gatewayUser->isValidLogin($usr, $pass)){
            $this->id = $this->gatewayUser->getID($usr);
            $this->admin = $this->gatewayUser->isAdmin($this->id);
            return true;
        }
        return false;
    }

    public function isConnected($id){
        if($this->gatewayUser->isConnected($id)){
            $this->id = $id;
            $this->admin = $this->gatewayUser->isAdmin($this->id);
            return true;
        }
        return false;
    }
}