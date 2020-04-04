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
