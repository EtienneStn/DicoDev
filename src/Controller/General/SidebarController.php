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
        require "../config/Variables.php";   
        $requeteLangageSideBar = $this->sidebarRepository->getLangageSideBar();
        // $requeteLangageSideBar = $objet->fetchAll();
        // var_dump($requeteLangageSideBar);
        // var_dump($article);


        $requeteProprieteSideBar = $this->sidebarRepository->getProprieteSideBar();
        // $requeteProprieteSideBar = $objet->fetchAll();

        $requeteFunctionSideBar = $this->sidebarRepository->getFunctionSideBar();
        // $requeteFunctionSideBar = $objet->fetchAll();
        
        $requeteJSON = $this->sidebarRepository->getJSON();
        
        /* require "../templates/general/sidebarDynamic.php"; */
        require "../templates/general/sidebar.php";
        echo $output_sidebar;
        // non require "../templates/header.php";
        // require "../templates/body.php";
        // echo "fichier - '".__FILE__ ."'  ligne - ". __LINE__ ."\n";
         
        // require_once('../writeJSON.php');
        // $mysqli->close();
    }
    // public function single(){
    //     $articles = $this->articleRepository->getArticle($_GET['id']);
    //     $article = $articles->fetch();
    //     require "../templates/single.php";
    // }
}
