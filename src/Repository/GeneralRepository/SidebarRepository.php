<?php
namespace App\src\Repository\GeneralRepository;

use App\src\Repository\ManagerRepository;

class SidebarRepository extends ManagerRepository {
    
    public function getLangageSideBar(){
        require_once "../config/Variables.php";
        $sql="SELECT $tableLangageLogo, $tableLangageId, $tableLangageLangage FROM $tableLangage;";
        $requete = $this->createQuery($sql);

        return $requete;
    }

    public function getProprieteSideBar(){
        require_once "../config/Variables.php";
        $sql="SELECT $tableProprieteId, $tableProprieteId_langage, $tableProprietePropriete FROM $tablePropriete;";
        $requete = $this->createQuery($sql);

        return $requete;
    }

    public function getFunctionSideBar(){
        require_once "../config/Variables.php";
        $sql="SELECT  $tableFonctionId_propriete, $tableFonctionFonction FROM $tableFonctions;";
        $requete = $this->createQuery($sql);

        return $requete;
    }

    public function getJSON(){
        require_once "../config/Variables.php";
        $sql="SELECT $tableLangage.$tableLangageLangage, $tablePropriete.$tableProprietePropriete, $tableFonctions.$tableFonctionFonction FROM $tableLangage INNER JOIN $tablePropriete ON $tablePropriete.$tableProprieteId_langage = $tableLangage.$tableLangageId INNER JOIN $tableFonctions ON $tableFonctions.$tableFonctionId_propriete = $tablePropriete.$tableLangageId;";
        $requete = $this->createQuery($sql);
        
        return $requete;
    }
}