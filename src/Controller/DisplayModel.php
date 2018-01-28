<?php
/**
 * Created by PhpStorm.
 * User: teiva
 * Date: 27/01/18
 * Time: 15:44
 */

namespace App\Controller;

use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DisplayModel extends Controller {


    public function indexAction(){
        return $this->render('index.php.twig', array(
            'app_name' => 'Dictionnaire de modeles',
            'age' => '99'
        ), 'save', ButtonType::class, array(
                'attr' => array('class' => 'save'),
            ));
    }

    public function output(){

        return new Response(
            '<html><body>lel</body></html>'
        );
    }
}