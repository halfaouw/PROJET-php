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

     public function getAll() : array {

         $requete = $this->db->query("SELECT * FROM articles");

         $result = $requete->fetchAll(PDO::FETCH_CLASS,"Article");

         return $result;
       }

    public function getOne($nom) : Article {
     $requete = $this->db->query("SELECT * FROM articles WHERE nom='$nom'");
     $result = $requete->fetchAll(PDO::FETCH_CLASS,"UnArticle");
     return $resutl; 
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
          <p>Prix: '.$this->prix.' € </p>
          <p>Reference: '.$this->ref.'</p>
          <p>Catégorie: '.$this->categorie.'</p>
          <img src="../vue/design/'.$this->photo.'"alt="photo">
          <form action="../controleur/panier.ctrl.php?action="add&article='.$this->nom.'"" >
              <button>Ajouter au panier </button>
          </form>
      </div>
      ';

      return $view;
    }
  }

  class ArticlePanier {
    public $nom;
    public $description;
    public $prixUnitaire;
    public $ref;
    public $photo;
    public $type;

    public $prixTotal;
    public $quantite;

    public $corps;


    public function getcorps($page): string{
        $corps = '
        <div class="article">
          <img src="'.$this->photo.'" >
          <div>
              <div class="header">
                <h1>'.$this->nom.'</h1>
                <p>'.$this->prixTotal.'€</p> <br>
                <p>'.$this->quantite.'x'.$this->prixUnitaire.'€</p>
              </div>
              <p><b>Description :</b> '.$this->description.'</p>
              <div class="button_cont" align="center"><a class="example_d" href="?action=add&article='.$this->ref.'" >Ajouter au panier !</a></div>
          </div>
        </div>
        ';
        return $corps;
    }

    public function __construct(Article $article){

      $this->nom = $article->nom;
      $this->complement = $article->complement;
      $this->prixUnitaire = $article->prix;
      $this->ref = $article->ref;
      $this->categorie = $article->categorie;
      $this->photo = $article->photo;


      $this->quantite = 1;
      $this->prixTotal = $article->prix;
    }

    public function plusUn(){
      $this->quantite += 1;
      $this->prixTotal = $this->prixTotal + $this->prixUnitaire;
    }

  }
 ?>
