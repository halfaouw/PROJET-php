<?php
  class articleDB {
    private $db;
     function __construct()
     {
       try{
        $this->db= new PDO('sqlite:../BDD/test.db');
      } catch (PDOException $e){
        echo 'Connexion echouée '.$e->getMessage();
      }
     }
     public function getWaffine() : array{
       $requete = $this->db->query("SELECT * FROM articles WHERE categorie='waffine'");

       $result = $requete->fetchAll(PDO::FETCH_CLASS,"Article");

       return $result;

     }
     }
     class Article{
       public $nom;
       public $complement;
       public $prix;
       public $ref;
       public $categorie;
       public $photo;

       public $view;

       public function __construct() {

       }

       public function getView(): string{
         $view='
         <div class="article">
           <h3>Article: '.$this->nom.'</h3>
           <p>Complément:'.$this->complement.'></p>
           <p>Prix: '.$this->prix.'€ </p>
           <p>Reference: '.$this->ref.'</p>
           <p>Catégorie: '.$this->categorie.'</p>
           <img src="../vue/design/'.$this->photo.'"alt="photo">
           <div class="button_cont" align="center">
             <button class="panier" href="panier.ctrl.php" >Ajouter au panier</a>
           </div>
       </div>
       ';
         return $view;
       }
     }
    ?>
