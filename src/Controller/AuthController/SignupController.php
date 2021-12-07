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
            $hashPassword = $this->signupRepository->hashing($post['password']);
            $user = new User();
            $user
                ->setName($post['name'])
                ->setSurname($post['surname'])
                ->setUsername($post['username'])
                ->setEmail($post['email'])
                ->setPassword($hashPassword)
                ->setPasswordVerify($post['passwordVerify']);

            if($this->signupRepository->emptyInputSignup($post) === false)
            {
                var_dump("empty");
                header('Location: ?auth=signup&error=EmptyInput');
                die();
            }
            elseif($this->signupRepository->invalidUsername($post) === false)
            {
                header('Location: ?auth=signup&error=InvalidUsername');
                die();
            }
            elseif($this->signupRepository->invalidEmail($post) === false)
            {
                header('Location: ?auth=signup&error=InvalidEmail');
                die();
            }
            elseif($this->signupRepository->passwordMatch($post) === false)
            {
                header('Location: ?auth=signup&error=PasswordMatch');
                die();
            }
            else {
                $this->signupRepository->signupUser($user);
                header('Location: ?auth=login');
                die();
            }
        }
        else
        {
            require_once '../templates/auth/signup.php';
        }
    }
}