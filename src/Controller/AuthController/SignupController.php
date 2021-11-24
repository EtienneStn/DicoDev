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
        if(isset($post['signup']))
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

            if($this->emptyInputSignup($post) === false)
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

    protected function emptyInputSignup($post)
    {
        if(empty($post['name']) || empty($post['surname']) || empty($post['username']) || empty($post['email']) || empty($post['password']) || empty($post['passwordVerify']))
        {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    protected function invalidUsername($post) 
    {
        if(!preg_match("/^[a-zA-Z0-9]*$/", $post['username'])) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;  
    }

    protected function invalidEmail($post) 
    {
        if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;  
    }
}