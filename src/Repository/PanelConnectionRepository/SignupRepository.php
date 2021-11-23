<?php
namespace App\src\Repository\PanelConnectionRepository;

use App\src\Repository\ManagerRepository;
use App\src\Entity\EntityPanelConnection\User;

class SignupRepository extends ManagerRepository{
    public function buildObject()
    {
        $user = new User();
        $user
            ->setName($_POST['name']->name)
            ->setSurname($_POST['surname']->surname)
            ->setUsername($_POST['username']->username)
            ->setEmail($_POST['email']->email)
            ->setPassword($_POST['password']->password)
            ->setPasswordVerify($_POST['passwordVerify']->passwordVerify);

        return $user;
    }
    public function signupUser()
    {
        var_dump($_POST);
        var_dump($this->emptyInput());
        
        if($this->emptyInput() === false)
        {
            echo "<div class='error'>Erreur, des champs sont vides.</div>";
        }
        elseif($this->invalidUsername() === false)
        {
            echo "<div class='error'>Erreur, le nom d'utilisateur n'est pas valide.</div>";
        }
        elseif($this->invalidEmail() === false)
        {
            echo "<div class='error'>Erreur, mail non valide.</div>";
        }
        elseif($this->passwordMatch() === false)
        {
            echo "<div class='error'>Erreur, les mots de passe sont différents.</div>";
        }
        else 
        {
            $this->setUser();
        }
    }
    protected function emptyInput()
    {
        if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['passwordVerify']))
        {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }
    protected function invalidUsername() {
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;  
    }

    protected function invalidEmail() {
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;  
    }

    protected function passwordMatch() {
        if($this->password !== $this->passwordVerify) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;  
    }
}