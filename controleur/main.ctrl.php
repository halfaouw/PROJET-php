<?php
// Controleur principal : celui qui est utilisé au démarrage
// Etat : on connait ou non le nom de la personne
// Objectif : si le nom est connu on passe au début du jeu (start)
// sinon on demande à la personne de se présenter.

// Inclus le mini framework
require_once('../framework/view.php');
//require_once('../model/Panier.class.php');
//require_once('../model/Article.class.php');

session_start();    // pour detruire la session : session_destroy();


if (!isset($_SESSION['panier'])) {
  $_SESSION['panier'] = new Panier();
}

// if (!isset($_SESSION['pseudo'])){
//   $_SESSION['pseudo'] = new Inscrits();
// }

$view = new View('Waffle.view.php');
$view->display("Waffle.view.php");


?>
