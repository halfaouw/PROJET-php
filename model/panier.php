<?php

class Panier {
  public $nbarticles;
  public $Total;
  public $articles;

  public function __construct(){
    $this->articles = array();
    $this->nbarticles = 0;
    $this->Total = 0;
  }

  public function setNbArticle(){
    $this->nbarticle = 0;
    foreach ($this->arrayArticle as $key => $value) {
      $this->nbarticle = $this->nbarticle + $value->quantite;
    }
  }

  public function setPrixTotal(){
    $this->prixTotal = 0;
    foreach ($this->arrayArticle as $key => $value) {
      $this->prixTotal = $this->prixTotal + ($value->quantite * $value->prixUnitaire);
    }
  }

  public function viderPanier(){
    $this->arrayArticle = array();
    $this->nbarticle = 0;
    $this->prixTotal = 0;
  }
}
?>
