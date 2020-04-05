<?php
    // Partie principale

    // Inclusion du framework
    require_once('../framework/view.php');
    // Inclusion du modèle
    require_once('../model/article.php');
    // Creation de l'unique objet DAO

    session_start();

    $db = new articleDB();
    $articles= $db->getAll();

    $viewArticles = new view('articles.view.php');
    $viewArticles-> assign('articles',$articles);
    $viewArticles -> display('articles.view.php');
    ?>
