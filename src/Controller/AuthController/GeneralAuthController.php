<?php
namespace App\src\Controller\AuthController;

use App\src\Controller\ManagerController;
use App\src\Repository\AuthRepository\SignupRepository;
use App\src\Repository\AuthRepository\LoginRepository;
use App\src\Repository\AuthRepository\ProfileRepository;
use App\src\Repository\AuthRepository\LogoutRepository;
use App\src\Entity\AuthEntity\User;

class GeneralAuthController extends ManagerController{
    
    private $signupRepository;
    private $loginRepository;
    private $profileRepository;
    private $logoutRepository;
    
    public function __construct()
    {
        $this->signupRepository = new SignupRepository();
        $this->loginRepository = new LoginRepository();
        $this->profileRepository = new ProfileRepository();
        $this->logoutRepository = new LogoutRepository();
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
                echo "<script>window.location.href='?auth=signup&error=EmptyInput'</script>";
                die();
            }
            elseif($this->signupRepository->invalidUsername($post) === false)
            {
                echo "<script>window.location.href='?auth=signup&error=InvalidUsername'</script>";
                die();
            }
            elseif($this->signupRepository->invalidEmail($post) === false)
            {
                echo "<script>window.location.href='?auth=signup&error=InvalidEmail'</script>";
                die();
            }
            elseif($this->signupRepository->passwordMatch($post) === false)
            {
                echo "<script>window.location.href='?auth=signup&error=PasswordMatch'</script>";
                die();
            }
            else {
                $this->signupRepository->signupUser($user);
                echo "<script>window.location.href='?auth=login'</script>";
                die();
            }
        }
        else
        {
            require_once '../templates/auth/signup.php';
        }
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

            if($this->loginRepository->emptyInputLogin($post) === false)
            {
                echo "<script>window.location.href='?auth=login&error=EmptyInput'</script>";
                die();
            }
            else 
            {
                $this->loginRepository->loginUser($user);
                if(isset($_SESSION['userId']))
                {
                    echo "<script>window.location.href='?route=homepage'</script>";
                    die();
                }
            }
        }
        
        require_once '../templates/auth/login.php';
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

            if($this->profileRepository->emptyInputProfile($post) === false)
            {
                echo "<script>window.location.href='?auth=profile&error=EmptyInput'</script>";
                die();
            }
            else 
            {
            $this->profileRepository->updateUser($user);

                echo "<script>window.location.href='?auth=profile'</script>";
                die();
            }
        }
        require_once '../templates/auth/profile_form.php';
    }

    public function logout()
    {
        ob_clean();
        $this->logoutRepository->logoutUser();

        echo "<script>window.location.href='?auth=successLogout'</script>";;
        die();
    }
}