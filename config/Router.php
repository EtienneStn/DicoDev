<?php

namespace App\config;

use App\src\Controller\ManagerController;
use App\src\Controller\AuthController\SignupController;
use App\src\Controller\AuthController\LoginController;
use App\src\Controller\AuthController\ProfileController;
use App\src\Controller\AuthController\LogoutController;

class Router {
    
    private $sidebarController;
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
            }
        }
        else {
            $this->managerController->home();
        }

        $this->managerController->loadFooter();
    }
}