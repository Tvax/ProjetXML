<?php
/**
 * Created by PhpStorm.
 * User: teiva
 * Date: 01/02/18
 * Time: 21:36
 */

namespace App\Entity;


class GatewayUser
{

    /**
     * GatewayUser constructor.
     */
    public function __construct()
    {
    }

    public function isAdmin($usr){
        return true;
    }

    public function isValidLogin($usr, $pass){
        return true;
    }
}