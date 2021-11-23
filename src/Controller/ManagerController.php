<?php
namespace App\src\Controller;
use App\src\Repository\ManagerRepository;

class ManagerController extends ManagerRepository{
    public function home() 
    {
        require_once '../templates/homepage/homepage.php';
    }

    protected function hashing($post) 
    {
        return $hash = password_hash($post, PASSWORD_DEFAULT);
    }
    
    protected function emptyInput($post)
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