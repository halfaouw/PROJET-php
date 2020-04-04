<?php
  class articleDB extends SQLite3
  {
     function __construct()
     {
        $this->open('../BDD/test.db');
     }
  }

  class Article{
    public $nom;
    public $complement;
    public $prix;
    public $ref;
    public $categorie;
    public $photo;

    public function __construct() {
      $this->nom=$_POST['nom'];
      $this->complement=$_POST['complement'];
      $this->prix=$_POST['prix'];
      $this->ref=$_POST['ref'];
      $this->categorie=$_POST['categorie'];
      $this->photo='../vue/design/'.$_POST['photo'];
    }

    public function getAll(){

    $bdd = new PDO('sqlite:../BDD/test.db');
    $articles = $bdd->query("SELECT * FROM articles");

    foreach ($articles as $article): ?>
    <article>
        <h2>Article: <?php echo $article['nom'] ?></h2>
        <p>Complément: <?php echo $article['complement'] ?></p>
        <p>Prix: <?php echo $article['prix'] ?></p>
        <p>Reference: <?php echo $article['ref'] ?></p>
        <p>Catégorie: <?php echo $article['categorie'] ?></p>
        <img src="../vue/design/<?php echo $article['photo'] ?>" alt="photo">
    </article>
    <?php endforeach ?>
    <?php
    }

    public function getClassique(){

    $bdd = new PDO('sqlite:../BDD/test.db');
    $articles = $bdd->query("SELECT * FROM articles WHERE categorie='classique'");

    foreach ($articles as $article): ?>
    <article>
        <h2>Article: <?php echo $article['nom'] ?></h2>
        <p>Complément: <?php echo $article['complement'] ?></p>
        <p>Prix: <?php echo $article['prix'] ?></p>
        <p>Reference: <?php echo $article['ref'] ?></p>
        <p>Catégorie: <?php echo $article['categorie'] ?></p>
        <img src="../vue/design/<?php echo $article['photo'] ?>" alt="photo">
    </article>
    <?php endforeach ?>
    <?php
    }

    public function getSale(){

    $bdd = new PDO('sqlite:../BDD/test.db');
    $articles = $bdd->query("SELECT * FROM articles WHERE categorie='salé'");

    foreach ($articles as $article): ?>
    <article>
        <h2>Article: <?php echo $article['nom'] ?></h2>
        <p>Complément: <?php echo $article['complement'] ?></p>
        <p>Prix: <?php echo $article['prix'] ?></p>
        <p>Reference: <?php echo $article['ref'] ?></p>
        <p>Catégorie: <?php echo $article['categorie'] ?></p>
        <img src="../vue/design/<?php echo $article['photo'] ?>" alt="photo">
    </article>
    <?php endforeach ?>
    <?php
    }

    public function getWaffine(){

    $bdd = new PDO('sqlite:../BDD/test.db');
    $articles = $bdd->query("SELECT * FROM articles WHERE categorie='waffine'");

    foreach ($articles as $article): ?>
    <article>
        <h2>Article: <?php echo $article['nom'] ?></h2>
        <p>Complément: <?php echo $article['complement'] ?></p>
        <p>Prix: <?php echo $article['prix'] ?></p>
        <p>Reference: <?php echo $article['ref'] ?></p>
        <p>Catégorie: <?php echo $article['categorie'] ?></p>
        <img src="../vue/design/<?php echo $article['photo'] ?>" alt="photo">
    </article>
    <?php endforeach ?>
    <?php
    }


  }
 ?>
