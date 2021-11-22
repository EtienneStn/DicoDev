<?php
namespace App\src\Controller;
use App\src\Repository\ManagerRepository;

class ManagerController extends ManagerRepository{
    public function home() 
    {
        require_once '../templates/homepage/homepage.php';
    }
}