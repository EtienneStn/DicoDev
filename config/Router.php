<?php

namespace App\config;

use App\src\Controller\ManagerController;
use App\src\Controller\PanelConnectionController\SignupController;
use App\src\Controller\PanelConnectionController\LoginController;
use App\src\Controller\PanelConnectionController\ProfileController;

class Router {
    
    private $ManagerController;

    public function __construct()
    {
        $this->ManagerController = new ManagerController();
        $this->SignupController = new SignupController();
        $this->LoginController = new LoginController();
        $this->ProfileController = new ProfileController();
    }

    public function run(){
       
        if (isset($_GET['route'])) {
            if($_GET['route'] === "signup"){
                $this->SignupController->signupPage();
            }
            if($_GET['route'] === "login"){
                $this->LoginController->loginPage();
            }
            if($_GET['route'] === "profile"){
                $this->ProfileController->profilePage();
            }
        }
        else {
            $this->ManagerController->home();
        }
    }
}