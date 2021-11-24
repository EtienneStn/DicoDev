<?php
namespace App\src\Controller;
use App\src\Repository\ManagerRepository;

class ManagerController extends ManagerRepository{
    public function home() 
    {
        require_once '../templates/homepage/homepage.php';
    }
    
    public function profilePage()
    {
        require_once '../templates/auth/profile.php';
    }

    protected function hashing($post) 
    {
        return $hash = password_hash($post, PASSWORD_DEFAULT);
    }
    
    protected function passwordMatch($post) 
    {
        if($post['password'] !== $post['passwordVerify']) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;  
    }
}