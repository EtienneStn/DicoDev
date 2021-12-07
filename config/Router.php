<?php

namespace App\config;

use App\src\Controller\ManagerController;
use App\src\Controller\General\SidebarController;
use App\src\Controller\AuthController\SignupController;
use App\src\Controller\AuthController\LoginController;
use App\src\Controller\AuthController\ProfileController;
use App\src\Controller\AuthController\LogoutController;


class Router 
{
    
    private $managerController;
    private $sidebarController;
    private $signupController;
    private $loginController;
    private $profileController;
    
    public function __construct()
    {
        $this->managerController = new ManagerController();
        $this->sidebarController = new SidebarController();
        $this->signupController = new SignupController();
        $this->loginController = new LoginController();
        $this->profileController = new ProfileController();
        $this->logoutController = new LogoutController();
    }

    public function run()
    {
        $this->managerController->loadHeader();
        $this->sidebarController->loadSidebar();

        if (isset($_GET['auth'])) 
        {
            if($_GET['auth'] === "signup")
            {
                if(isset($_GET['error'])) 
                {
                    if($_GET['error'] === "EmptyInput")
                    {
                        echo "<div class='error'>Erreur, des champs sont vides.</div>";
                    }
                    elseif($_GET['error'] === "InvalidUsername")
                    {
                        echo "<div class='error'>Erreur, le nom d'utilisateur n'est pas valide.</div>";
                    }
                    elseif($_GET['error'] === "InvalidEmail")
                    {
                        echo "<div class='error'>Erreur, mail non valide.</div>";
                    }
                    elseif($_GET['error'] === "PasswordMatch")
                    {
                        echo "<div class='error'>Erreur, les mots de passe sont différents.</div>";
                    }
                }

                $this->signupController->signupPage($_POST);
            }
            if($_GET['auth'] === "login")
            {
                $this->loginController->loginPage($_POST);
            }
            if($_GET['auth'] === "profile")
            {
                $this->managerController->profilePage();
            }
            if($_GET['auth'] === "profile/update")
            {
                $this->profileController->profileUpdate($_POST);
            }
            if($_GET['auth'] === "logout")
            {
                $this->logoutController->logout();
            }
            if($_GET['auth'] === "successLogout")
            {
                $this->managerController->home();
                echo "<div class='success'>Success Logout</div>";
            }
        }
        else 
        {
            $this->managerController->home();
        }

        $this->managerController->loadFooter();
    }
}