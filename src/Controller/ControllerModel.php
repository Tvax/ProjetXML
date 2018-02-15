<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;

class ControllerModel extends Controller{

    private $user;

    private $cookieID = "ID";
    private $loginKey = "username";
    private $passwordKey = "password";
    private $disconnectKey = "disconnect";

    private $signInMessage = "Sign In";
    private $loginErrorMessage = "Login Error";
    private $disconnectMessage = "Disconnected";
    private $signInAsAdminMessage = "Sign In As Admin";


// <editor-fold defaultstate="collapsed" desc="routes">


    /**
     * @Route("/validate")
     */
    public function validateAction(Request $request){
        $this->user = new User();

        if($this->isUserConnected($this->user, $request)){
            return $this->sendToValidate($this->user->isAdmin());
        }
        return $this->sendToLogin($this->signInMessage);
    }


    /**
     * @Route("/admin")
     */
    public function adminAction(Request $request){
        $this->user = new User();

        if($this->isUserConnected($this->user, $request)){
            if($this->user->isAdmin()){
                return $this->sendToAdmin($this->user->isAdmin());
            }
        }
        return $this->sendToLogin($this->signInAsAdminMessage);
    }


    /**
     * @Route("/")
     */
    public function indexAction(Request $request){
        $this->user = new User();

        if($request->get($this->disconnectKey)){
            if($this->loginCookieIsSet($request)) {
                if ($this->user->isConnected($request->cookies->get($this->cookieID))) {
                    $this->unsetUserCookie($this->user->getID());
                    return $this->sendToLogin($this->disconnectMessage);
                }
            }
        }

        if($this->isUserConnected($this->user, $request)){
            return $this->sendToConnected($this->user->isAdmin());
        }

        if($this->credentialsAreSet($request)) {
            if ($this->user->connectUser($request->get($this->loginKey), $request->get($this->passwordKey))) {
                $this->setUserCookie($this->user->getID());
                return $this->sendToConnected($this->user->isAdmin());
            }
        }

        return $this->sendToLogin($this->loginErrorMessage);
    }

// </editor-fold>

    private function setUserCookie($id){
        setcookie($this->cookieID, $id, time()+3600);
    }

    private function unsetUserCookie($id){
        setcookie($this->cookieID, $id, time()-100);
    }

    private function loginCookieIsSet(Request $request){
        return $request->cookies->has($this->cookieID);
    }

    private function credentialsAreSet(Request $request){
        return $request->get($this->loginKey) != null && $request->get($this->passwordKey) != null;
    }

    private function isUserConnected($user, $request){
        return $this->loginCookieIsSet($request) && $user->isConnected($request->cookies->get($this->cookieID));
    }

// <editor-fold defaultstate="collapsed" desc="redirection">

    private function sendToValidate($isAdmin){
        return $this->render('default/validate.php.twig', array(
            'isAdmin' => $isAdmin
        ));
    }

    private function sendToConnected($isAdmin){
        return $this->render('default/model_list.php.twig', array(
            'isAdmin' => $isAdmin
        ));
    }

    private function sendToLogin($errorMessage){
        return $this->render('login.html.twig', array(
            'errorMessage' => $errorMessage
        ));
    }

    private function sendToAdmin($isAdmin){
        return $this->render('admin/admin.php.twig', array(
            'isAdmin' => $isAdmin
        ));
    }


// </editor-fold>

}