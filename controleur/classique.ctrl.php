<?php
    // Partie principale

    // Inclusion du framework
    require_once('../framework/view.php');
    // Inclusion du modèle
    require_once('../model/Classique.php');
    // Creation de l'unique objet DAO

    session_start();

    $db = new articleDB();
    $classiques= $db->getClassique();

    $viewClassiques = new view('classiques.view.php');
    $viewClassiques-> assign('classiques',$classiques);
    $viewClassiques -> display('classiques.view.php')


    ?>
