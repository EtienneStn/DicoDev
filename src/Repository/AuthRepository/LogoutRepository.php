<?php
namespace App\src\Repository\AuthRepository;

class LogoutRepository
{  
    public function logoutUser() {
        session_start();
        session_unset();
        session_destroy();
        header("location: ./?route=homepage");
        exit();
    } 
}