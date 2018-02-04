<?php
/**
 * Created by PhpStorm.
 * User: teiva
 * Date: 01/02/18
 * Time: 21:36
 */

namespace App\Gateway;


//TODO: acceder a la BDD
class GatewayUser{

    public function __construct(){

    }

    public function isAdmin($id){
        return false;
    }

    public function isValidLogin($usr, $pass){
        return true;
    }

    public function isConnected($id){
        return true;
    }

    public function getID($usr){
        return 1;
    }

}