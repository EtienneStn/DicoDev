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
                header('Location: ./?auth=signup&error=EmptyInput');
                exit();
            }
            elseif($this->signupRepository->invalidUsername($post) === false)
            {
                header('Location: ./?auth=signup&error=InvalidUsername');
                exit();
            }
            elseif($this->signupRepository->invalidEmail($post) === false)
            {
                header('Location: ./?auth=signup&error=InvalidEmail');
                exit();
            }
            elseif($this->signupRepository->passwordMatch($post) === false)
            {
                header('Location: ./?auth=signup&error=PasswordMatch');
                exit();
            }
            else {
                $this->signupRepository->signupUser($user);
                header('Location: ./?auth=login');
                exit();
            }
        }
        require '../templates/auth/signup.php';
    }
}