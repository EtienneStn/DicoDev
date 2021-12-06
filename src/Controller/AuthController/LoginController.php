<?php
namespace App\src\Controller\AuthController;

use App\src\Controller\ManagerController;
use App\src\Entity\AuthEntity\User;
use App\src\Repository\AuthRepository\LoginRepository;

class LoginController extends ManagerController{
    
    private $loginRepository;
    
    public function __construct()
    {
        $this->loginRepository = new LoginRepository();
    }
    
    public function loginPage($post)
    {
        if(isset($post['login']))
        {
            $user = new User();
            $user
                ->setUsername($post['username'])
                ->setEmail($post['username'])
                ->setPassword($post['password']);

            if($this->emptyInputLogin($post) === false)
            {
                header('Location: index.php?auth=profile&error=EmptyInput');
                exit();
            }
            else 
            {
                $this->loginRepository->loginUser($user);

                header('Location: index.php?route=homepage');
            }
        }
        
        require '../templates/auth/login.php';
    }

    protected function emptyInputLogin($post)
    {
        if(empty($post['username'])|| empty($post['password']))
        {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }
}