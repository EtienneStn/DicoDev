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
    private $logoutController;

    public function __construct()
    {
        $this->managerController = new ManagerController();
        $this->signupController = new SignupController();
        $this->loginController = new LoginController();
        $this->profileController = new ProfileController();
        $this->logoutController = new LogoutController();
    }

    public function run(){
       
        if (isset($_GET['auth'])) {
            if($_GET['auth'] === "signup"){
                $this->signupController->signupPage($_POST);
            }
            if($_GET['auth'] === "login"){
                $this->loginController->loginPage($_POST);
            }
            if($_GET['auth'] === "profile"){
                $this->profileController->profilePage($_POST);
            }
            if($_GET['auth'] === "logout"){
                $this->logoutController->logout();
            }
        }
        else {
            $this->managerController->home();
        }
    }
}