<?php
namespace App\src\Controller\PanelConnectionController;
use App\src\Repository\PanelConnectionRepository\SignupRepository;

class SignupController extends SignupRepository{
    
    private $signupRepository;
    
    public function __construct()
    {
        $this->signupRepository = new SignupRepository();
    }
    
    public function signupPage()
    {
        require '../templates/panel-connection/signup.php';
        if(isset($_POST['signup']))
        {
            $this->signupRepository->signupUser($_POST);
        }
    }
}