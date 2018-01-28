<?php
/**
 * Created by PhpStorm.
 * User: teiva
 * Date: 27/01/18
 * Time: 15:37
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController{
    public function number(){
        $number = mt_rand(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}