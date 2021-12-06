<?php
namespace App\src\Controller\AuthController;

use App\src\Entity\AuthEntity\User;
use App\src\Repository\AuthRepository\ProfileRepository;

class ProfileController extends ProfileRepository{
    
    private $profileRepository;
    
    public function __construct()
    {
        $this->profileRepository = new ProfileRepository();
    }
    public function profileUpdate($post)
    {
        if(isset($post['update']))
        {
            $user = new User();
            $user
                ->setId($_SESSION['userId'])
                ->setName($post['name'])
                ->setSurname($post['surname'])
                ->setUsername($post['username'])
                ->setEmail($post['email'])
                ->setPassword($post['password']);

            if($this->emptyInputProfile($post) === false)
            {
                echo "<div class='error'>Erreur, des champs sont vides.</div>";
            }
            else 
            {
            $this->profileRepository->updateUser($user);

            header('Location: ./?auth=profile');
            exit();
            }
        }
        require '../templates/auth/profile_form.php';
    }
}