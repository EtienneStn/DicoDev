<?php
namespace App\src\Controller\AuthController;
use App\src\Repository\AuthRepository\ProfileRepository;

class ProfileController extends ProfileRepository{
    
    private $profileRepository;
    
    public function __construct()
    {
        $this->profileRepository = new ProfileRepository();
    }
    
    public function profilePage()
    {
        require '../templates/auth/profile.php';
        if(isset($_POST['update']))
        {
            $this->profileRepository->updateUser($_POST);
        }
    }
}