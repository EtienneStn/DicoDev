<?php
// echo ("fichier - '".__FILE__ ."'  ligne - ". __LINE__ );
//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓  * Barre de NAVIGATION * ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓

// Création tableau Langages 

// $requeteLangageSideBar = "SELECT $tableLangageLogo, $tableLangageId, $tableLangageLangage FROM $tableLangage ";

// $resultat = $mysqli -> query($requete);

$barNavLangages = array();



$i=0;

// while ( $ligneResultat = $requeteLangageSideBar -> fetch_assoc()) {
	$barNavLangages= (array)	$requeteLangageSideBar;
	// var_dump($barNavLangages);
	// echo ("fichier - '".__FILE__ ."'  ligne - ". __LINE__ );

while ( $ligneResultat = $requeteLangageSideBar -> fetch()) {
	$ligneResultat=((array)$ligneResultat);

	$barNavLangages[$i]=  $ligneResultat; //toute la ligne dans format tableau";
	// echo($barNavLangages[1]);
	$i++;
	
	
}
$rien=array_shift($barNavLangages);
// $rien=array_shift($barNavLangages);
// var_dump($barNavLangages);
// $barNavLangages=((array)$barNavLangages[1]); fonctionne
// echo($barNavLangages["logo"]);

// $barNavLangages=((array)$barNavLangages);
// echo($barNavLangages["logo"]);


// foreach ($barNavLangages as $key1 ) {
// 	// var_dump( (array) $key1 );

// }


// $requete = "SELECT $tableProprieteId, $tableProprieteId_langage, $tableProprietePropriete FROM $tablePropriete ";

// $resultat = $mysqli -> query($requete);

$barNavPropriete = array();

$i=0;

while ( $ligneResultat = $requeteProprieteSideBar -> fetch()) {
	$ligneResultat=((array)$ligneResultat);
	 

	$barNavPropriete[$i]=  $ligneResultat; //toute la ligne dans format tableau";

	$i++;
}
$rien=array_shift($barNavPropriete);

// $requete = "SELECT  $tableFonctionId_propriete, $tableFonctionFonction FROM $tableFonctions ";

// $resultat = $mysqli -> query($requete);

$barNavFonctions = array();

$i=0;

while ( $ligneResultat = $requeteFunctionSideBar -> fetch()) {
	$ligneResultat=((array)$ligneResultat);
	 

	$barNavFonctions[$i]=  $ligneResultat; //toute la ligne dans format tableau";

	$i++;
}
$rien=array_shift($barNavFonctions);

$i=0;
	
?>
<main class="bg1">
    <div class="sidebar row">
        <div class="general-sidebar">
            <div class="container-sidebar">
                <form class="shearch-bar">
                    <input type="text" name="shearch-bar" placeholder="Rechercher">
                </form>
                <div class="items-sidebar">
                    <?php
                    foreach ($barNavLangages as $key1 => $value1)
                    {
                    ?>
                    <aside class="row container-items-sidebar">
                        <ul class="dropdown margin-top-dropdown">
                            <a data-toggle="dropdown" href="../index.php">
                                <i class="fas fa-caret-right">
                                </i>
                                    <img class="logo" src="<?=htmlspecialchars($barNavLangages[$key1][$tableLangageLogo])?>" alt="LOGO">&nbsp;
                                        <span>
                                            <?=htmlspecialchars($barNavLangages[$key1][$tableLangageLangage])?>
                                        </span>
							</a>
							<?php
                            foreach ($barNavPropriete as $key2 => $value2)
                            {
								if ($barNavLangages[$key1][$tableLangageId] == $barNavPropriete[$key2][$tableProprieteId_langage])
                                { //si ID de barNavLangages = $tableProprieteId_langage de barNavPropriete

							?>
                            <li class="dropdown-menu dropdown-menu-hidden">
                                <ul class="dropdown">
                                <a data-toggle="dropdown">
                                    <i class="fas fa-caret-right"></i>
                                    <?=htmlspecialchars($barNavPropriete[$key2][$tableProprietePropriete])?>
                                </a>
                                <?php 
                                foreach ($barNavFonctions as $key3 => $value3)
                                {
									if ($barNavPropriete[$key2][$tableProprieteId] == $barNavFonctions[$key3][$tableFonctionId_propriete])
                                    {
								?>
                                    <li class="dropdown-menu dropdown-menu-hidden">
                                        <ul>
                                            <a href="test.php?<?=htmlspecialchars($table)?>=<?=htmlspecialchars($tableFonctions)?>&amp;<?=htmlspecialchars($tuple)?>=<?=htmlspecialchars($barNavFonctions[$key3][$tableFonctionFonction])?>">
                                            <?=htmlspecialchars($barNavFonctions[$key3][$tableFonctionFonction])?>
                                            </a>
                                        </ul>
                                    </li>
                                <?php 
									}
								}
                                ?>
                                </ul>
                            </li>
                            <?php 
                                }
                            }	
                            ?>
                        </ul>
                    </aside>
                    <?php 
						$i++;
					}
                    ?>
                </div>
            </div>
        </div>
        <div class="sidebar-close">
            <button class="btn-sidebar"></button>
        </div>
    </div>