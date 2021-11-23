<?php
namespace App\src\Controller\AuthController;

use App\src\Controller\ManagerController;
use App\src\Repository\AuthRepository\SignupRepository;
use App\src\Entity\AuthEntity\User;

class SignupController extends ManagerController{
    
    private $signupRepository;
    
    public function __construct()
    {
        $this->signupRepository = new SignupRepository();
    }
    
    public function signupPage($post)
    {
        if(isset($_POST['signup']))
        {   
            $hashPassword = $this->hashing($post['password']);
            $user = new User();
            $user
                ->setName($post['name'])
                ->setSurname($post['surname'])
                ->setUsername($post['username'])
                ->setEmail($post['email'])
                ->setPassword($hashPassword)
                ->setPasswordVerify($post['passwordVerify']);

            if($this->emptyInput($post) === false)
            {
                echo "<div class='error'>Erreur, des champs sont vides.</div>";
            }
            elseif($this->invalidUsername($post) === false)
            {
                echo "<div class='error'>Erreur, le nom d'utilisateur n'est pas valide.</div>";
            }
            elseif($this->invalidEmail($post) === false)
            {
                echo "<div class='error'>Erreur, mail non valide.</div>";
            }
            elseif($this->passwordMatch($post) === false)
            {
                echo "<div class='error'>Erreur, les mots de passe sont différents.</div>";
            }
            else {
                $this->signupRepository->signupUser($user);
                
            }
        }
        require '../templates/auth/signup.php';
    }
}