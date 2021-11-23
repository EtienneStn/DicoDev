<?php

namespace App\config;

use App\src\Controller\ManagerController;
use App\src\Controller\PanelConnectionController\SignupController;
use App\src\Controller\PanelConnectionController\LoginController;
use App\src\Controller\PanelConnectionController\ProfileController;

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
    }

    public function run(){
       
        if (isset($_GET['route'])) {
            if($_GET['route'] === "signup"){
                $this->signupController->signupPage();
            }
            if($_GET['route'] === "login"){
                $this->loginController->loginPage();
            }
            if($_GET['route'] === "profile"){
                $this->profileController->profilePage();
            }
        }
        else {
            $this->managerController->home();
        }
    }
}