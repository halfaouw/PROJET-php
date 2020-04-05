<?php

require_once('../model/article.php');
require_once('../model/panier.php');
require_once('../framework/view.php');


session_start();

// if (!isset($_SESSION['panier'])) {
//   $_SESSION['panier'] = new Panier();
// }

$db= new articleDB();


if (isset($_GET['action'])) {
    if ($_GET['action'] == 'suppr') {
        $_SESSION['panier']->viderPanier();
    }
    elseif (($_GET['action'] == 'add')){
      $article = $_GET['article'];
      $articles= $db->getOne($article);
      $prix= $article->prix;
      $nb= $article ->nbarticle +1; 
    }
}

$view = new View('Panier.view.php');
$view->assign('panier',$_SESSION['panier']);
$view->display('Panier.view.php');

?>
