<?php
namespace App\src\Controller\AuthController;
use App\src\Repository\AuthRepository\LogoutRepository;

class LogoutController extends LogoutRepository{
    
    private $logoutRepository;
    
    public function __construct()
    {
        $this->logoutRepository = new LogoutRepository();
    }
    
    public function logout()
    {
        if(isset($_POST['update']))
        {
            $this->logoutRepository->logoutUser();
        }
    }
}