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
        if(isset($_POST['login']))
        {
            $user = new User();
            $user
                ->setUsername($post['username'])
                ->setEmail($post['username'])
                ->setPassword($post['password']);

            /* if($this->emptyInput($post) === false)
            {
                echo "<div class='error'>Erreur, des champs sont vides.</div>";
            } */
            /* elseif($this->invalidEmailOrUsername($post) === false)
            {
                echo "<div class='error'>Erreur, mail non valide.</div>";
            } */
            /* else 
            { */
                $this->loginRepository->loginUser($user, $post);
            /* } */
        }
        
        require '../templates/auth/login.php';
    }
}