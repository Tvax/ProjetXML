<?php

namespace App\Gateway;

class GatewayUser{

    public function __construct(){
    }

    public function isAdmin($id){
        return $id == 1;
    }

    public function isValidLogin($usr, $pass){
        return true;
    }

    public function isConnected($id){
        return true;
    }

    public function getID($usr){
        return $usr == "admin@admin.com";
    }

}
