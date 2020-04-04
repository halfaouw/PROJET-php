<?php
    // Partie principale

    // Inclusion du framework
    include_once("../framework/view.class.php");

    // Inclusion du modèle
    require_once("../model/DAO.class.php");
    require_once('../admin/article.php');

    // Creation de l'unique objet DAO
    $dao = new DAO();

    ///////////////////////////////////////////////////////
    //  A COMPLETER
    ///////////////////////////////////////////////

    // Pas de catégorie
    $categorie = 0;



    ////////////////////////////////////////////////////////////////////////////
    // Construction de la vue
    ////////////////////////////////////////////////////////////////////////////
    $view = new View();

    // Passe les paramètres à la vue

    // Les articles
    $view->assign('articles',$articles);

    // La catégorie
    $view->assign('categorie',$categorie);

    // Si la catégorie est non nulle, calcule le chemin et le passe à la vue
    // Si une categorie est définie
    if ($categorie != 0) {
      $cat = $dao->getCat($categorie);
      $view->assign('categoryPath',$cat->getPath());
    }

    // Note la référence du premier et dernier article affiché
    $firstRef = $articles[0]->getRef();
    $lastRef = end($articles)->getRef();

    // Calcule la référence qui suit le dernier article
    $nextRef = $dao->next($lastRef);
    // Si c'est la fin: reste sur le même article
    if ($nextRef == -1) {
      $nextRef = $firstRef;
    }
    // Passe le résultat à la vue
    $view->assign('nextRef',$nextRef);

    // Calcule la référence qui précède de 12 l'article courant
    $prevRef = $dao->prevN($firstRef,12);
    // Si c'est la fin: reste sur le même article
    if ($prevRef == -1) {
      $prevRef = $firstRef;
    }
    // Passe le résultat à la vue
    $view->assign('prevRef',$prevRef);

  //$view->dump();

    // Charge la vue
    $view->display("articles.view.php")
    ?>
