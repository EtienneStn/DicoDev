<?php
ob_start();
?>
<div class="doc-page">
    <div id="sidebar" class="sidebar row">
        <div class="general-sidebar">
            <div class="container-sidebar">
                <?php
                include_once '../templates/general/searchBar.php'; 
                ?>
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
    <main class="bg1">
        <section class="main-content bg-2">
<?php 
    $output_sidebar = ob_get_clean();
?>