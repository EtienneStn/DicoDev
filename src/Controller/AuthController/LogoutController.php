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
        $this->logoutRepository->logoutUser();

        header("location: ./?auth=logout?success=logout");
        exit();
    }
}