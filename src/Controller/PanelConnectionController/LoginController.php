<?php
namespace App\src\Controller\PanelConnectionController;
use App\src\Repository\PanelConnectionRepository\LoginRepository;

class LoginController extends LoginRepository{
    public function loginPage()
    {
        require '../templates/panel-connection/login.php';
        if(isset($_POST['login']))
        {
            $this->loginRepository->loginUser($_POST);
        }
    }
}