<?php
namespace App\src\Repository\GeneralRepository;

use App\src\Repository\ManagerRepository;

class SidebarRepository extends ManagerRepository {
    public function selectAll()
    {
        $sql = 'SELECT * FROM langages';
        $this->createQuery($sql);
    }
}