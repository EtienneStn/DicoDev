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
        /* require_once "../config/Variables.php";   
        $requeteLangageSideBar = $this->sidebarRepository->getLangageSideBar();
        // $requeteLangageSideBar = $objet->fetchAll();
        // var_dump($requeteLangageSideBar);
        // var_dump($article);


        $requeteProprieteSideBar = $this->sidebarRepository->getProprieteSideBar();
        // $requeteProprieteSideBar = $objet->fetchAll();

        $requeteFunctionSideBar = $this->sidebarRepository->getFunctionSideBar();
        // $requeteFunctionSideBar = $objet->fetchAll();
        
        $requeteJSON = $this->sidebarRepository->getJSON(); */
        
        /* require_once "../templates/general/sidebarDynamic.php"; */
        require_once "../templates/general/sidebar.php";
        echo $output_sidebar;
        // non require_once "../templates/header.php";
        // require_once "../templates/body.php";
        // echo "fichier - '".__FILE__ ."'  ligne - ". __LINE__ ."\n";
         
        
        // $mysqli->close();
    }
}
