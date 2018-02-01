<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class ControllerModel extends Controller{

    private $user;

    private function isAdmin(){
        return $this->isConnected() && true;
    }

    private function isConnected(){
        return false;
    }


// <editor-fold defaultstate="collapsed" desc="routes">
    /**
     * @Route("/")
     */
    public function indexAction(){
        if($this->isConnected()){
            return $this->sendToConnected($this->isAdmin());
        }
        return $this->sendToLogin("Sign In");
    }

    /**
     * @Route("/validate")
     */
    public function validateAction(){
        if($this->isConnected()){
            return $this->sendToValidate($this->isAdmin());
        }
        return $this->sendToLogin("Sign In");
    }


    /**
     * @Route("/admin")
     */
    public function adminAction(){
        if($this->isAdmin()){
            return $this->render('admin/admin.php.twig');
        }
        return $this->sendToLogin("Sign In As Admin");
    }

    private function sendToLogin($errorMessage){
        return $this->render('login.html.twig', array(
            'errorMessage' => $errorMessage
        ));
    }

    /**
     * @Route("/connect")
     */
    public function connectAction(){
        if($this->isValidLogin($_POST["username"], $_POST["password"])){
            $this->setUserCookie();
            return $this->sendToConnected($this->user->isAdmin());
        }

        $this->sendToLogin("Login Error");
    }

    /**
     * @Route("/disconnect")
     */
    public function disconnectAction(){
        $this->unsetUserCookie();
        return $this->sendToLogin("Disconnected");
    }

// </editor-fold>

    private function isValidLogin($usr, $pass){
        if(!empty($usr) && !empty($pass)){
            return $this->user = new User($usr, $pass);
        }
        return false;
    }

    private function setUserCookie(){
        setcookie("ID",$_POST["username"] , time()+3600);
    }

// <editor-fold defaultstate="collapsed" desc="redirection">
    private function sendToValidate($isAdmin){
        return $this->render('default/validate.php.twig', array(
            'isAdmin' => $isAdmin,
        ));
    }

    private function sendToConnected($isAdmin){
        return $this->render('default/model_list.php.twig', array(
            'isAdmin' => $isAdmin,
        ));
    }

    private function unsetUserCookie(){
        setcookie("ID", $this->user->getName(), time()-100);
    }
// </editor-fold>

}