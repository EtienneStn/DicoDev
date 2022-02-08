<?php
namespace App\src\Controller\General;

use App\src\Controller\ManagerController;
use App\src\Repository\GeneralRepository\SidebarRepository;


class SidebarController extends ManagerController
{
    private $sidebarRepository;

    public function __construct()
    {
        $this->sidebarRepository = new SidebarRepository();
    }

    public function loadSidebar(){
                
        require_once "../templates/general/sidebar.php";
        // require_once "../templates/general/sidebar.php";
        echo $output_sidebar;
        // non require_once "../templates/header.php";
        // require_once "../templates/body.php";
        // echo "fichier - '".__FILE__ ."'  ligne - ". __LINE__ ."\n";
         
        
        // $mysqli->close();
    }
}
