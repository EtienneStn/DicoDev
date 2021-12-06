<?php

namespace App\config;

use App\src\Controller\ManagerController;
use App\src\Controller\AuthController\SignupController;
use App\src\Controller\AuthController\LoginController;
use App\src\Controller\AuthController\ProfileController;
use App\src\Controller\AuthController\LogoutController;

class Router {
    
    private $managerController;
    private $signupController;
    private $loginController;
    private $profileController;
    
    public function __construct()
    {
        $this->managerController = new ManagerController();
        $this->signupController = new SignupController();
        $this->loginController = new LoginController();
        $this->profileController = new ProfileController();
        $this->logoutController = new LogoutController();
    }

    public function run(){
        
        $this->managerController->loadHeader();
        $this->managerController->loadSidebar();

        if (isset($_GET['auth'])) {
            if($_GET['auth'] === "signup"){
                if (isset($_GET['error']))
                {
                    if($_GET['auth'] === "signup")
                    {
                        echo "<div class='error'>Erreur, des champs sont vides.</div>";
                    }
                    if($_GET['error'] === "invalidUsername")
                    {
                        echo "<div class='error'>Erreur, le nom d'utilisateur n'est pas valide.</div>";
                    }
                    if($_GET['error'] === "invalidEmail")
                    {
                        echo "<div class='error'>Erreur, mail non valide.</div>";
                    }
                    if($_GET['error'] === "passwordMatch")
                    {
                        echo "<div class='error'>Erreur, les mots de passe sont différents.</div>";
                    }
                }
                $this->signupController->signupPage($_POST);
            }
            if($_GET['auth'] === "login"){
                $this->loginController->loginPage($_POST);
            }
            if($_GET['auth'] === "profile"){
                $this->managerController->profilePage();
            }
            if($_GET['auth'] === "profile/update"){
                $this->profileController->profileUpdate($_POST);
            }
            if($_GET['auth'] === "logout"){
                $this->logoutController->logout();
                if (isset($_GET['success']))
                {
                    if($_GET['success'] === "logout")
                    {
                        echo "<div class='success'>Success Logout</div>";
                    }
                }
            }
        }
        else {
            $this->managerController->home();
        }

        $this->managerController->loadFooter();
    }
}