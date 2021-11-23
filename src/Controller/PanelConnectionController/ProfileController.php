<?php
namespace App\src\Controller\PanelConnectionController;
use App\src\Repository\PanelConnectionRepository\ProfileRepository;

class ProfileController extends ProfileRepository{
    
    private $profileRepository;
    
    public function __construct()
    {
        $this->profileRepository = new ProfileRepository();
    }
    
    public function profilePage()
    {
        require '../templates/panel-connection/profile.php';
        if(isset($_POST['update']))
        {
            $this->profileRepository->updateUser($_POST);
        }
    }
}