<?php
    // Partie principale

    // Inclusion du framework
    require_once('../framework/view.php');
    // Inclusion du modèle
    require_once('../model/waffine.php');
    // Creation de l'unique objet DAO

    session_start();

    $db = new articleDB();
    $waffine=$db ->getWaffine();

    $viewWaffine = new view('waffine.view.php');
    $viewWaffine-> assign('waffine',$waffine);
    $viewWaffine -> display('waffine.view.php')

    ?>
