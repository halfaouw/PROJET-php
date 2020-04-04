<?php
    // Partie principale

    // Inclusion du framework
    require_once('../framework/view.php');
    // Inclusion du modèle
    require_once('../model/Sale.php');
    // Creation de l'unique objet DAO

    session_start();

    $db = new articleDB();

    $salees=$db ->getSale();

    $viewSalees = new view('Sale.view.php');
    $viewSalees-> assign('salees',$salees);
    $viewSalees -> display('Sale.view.php')
    ?>
