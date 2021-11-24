<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>DICODEV</title>
</head>
<body>
<header class="bg0">
    <nav class="header row container-fluid">
        <ul class="nav col-50 row">
            <li class="h1 row">
                <a href=""><img src="../library/img/Logo.jpg" alt=""></a>
            </li>
            <div class="info-header row">
                <li>
                    <a href="">à propos</a>
                </li>
                <li>
                    <a href="">contact</a>
                </li>
            </div>
        </ul>
        <ul class="nav2 row col-50">
            <li class="toggle-container">
                    <input type="checkbox" id="switch" name="theme" class="theme-input"/><label for="switch" class="theme-label">Toggle</label>
            </li>
            <?php
            if(isset($_SESSION['userId'])) {
            ?>
                <li>
                    <img class="" src="https://via.placeholder.com/30x30" alt="">
                </li>
                <li>
                    <a class="" href="?auth=profile"><?= htmlspecialchars($_SESSION['userUsername']); ?></a>
                </li>
                <li>
                    <a class="btn-nav" href="?auth=logout">Logout</a>
                </li>
            <?php 
            }
            else {
                ?> 
                <li>
                    <a class="btn-nav" href="?auth=login">Se connecter</a>
                </li>
                <li>
                    <a class="btn-nav" href="?auth=signup">S'inscrire</a>
                </li>
            <?php 
            }
            ?>
        </ul>
    </nav>
</header>
<main class="bg1">
    <div class="sidebar row">
        <div class="general-sidebar">
            <div class="container-sidebar">
                <form class="shearch-bar" action="POST">
                    <input type="text" name="shearch-bar" placeholder="Rechercher">
                </form>
                <div class="items-sidebar">
                        <nav class="row container-items-sidebar">
                            <li class="dropdown margin-top-dropdown"><a data-toggle="dropdown" href="#"><i class="fas fa-caret-right"></i>
                                </i>TEST</a>
                                <ul class="dropdown-menu dropdown-menu-hidden">
                                <li class="dropdown"><a data-toggle="dropdown" href="#"><i class="fas fa-caret-right"></i>Lorem.</a>
                                        <ul class="dropdown-menu dropdown-menu-hidden">
                                            <li>Lorem, ipsum.</li>
                                            <li>Lorem, ipsum.</li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a data-toggle="dropdown" href="#"><i class="fas fa-caret-right"></i>Lorem.</a>
                                        <ul class="dropdown-menu dropdown-menu-hidden">
                                            <li>Lorem, ipsum.</li>
                                            <li>Lorem, ipsum.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </nav>
                </div>
            </div>
        </div>
        <div class="sidebar-close">
            <button class="btn-sidebar"></button>
        </div>
    </div>
    <div class="main-content">
