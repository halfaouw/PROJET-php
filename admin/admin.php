<?php
session_start();
  if(isset($_SESSION['pseudo']) == false){
    header('Location: index.php');
  }
  else {
    if (isset($_GET['action'])){

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
          $this->photo='C:/wamp64/www/github/PROJET-php/BDD/img/'.$_POST['photo'];//faudrait mettre autre chose qu'un chemin complet
        }
      }

              class articleDB extends SQLite3
              {
                 function __construct()
                 {
                    $this->open('../BDD/test.db');
                 }
              }
      if($_GET['action']=='ajouter'){
        //header('Location: Article.php');
        ////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////
        //<?php
        //session_start();
        //il fallait faire un autre fichier pour l'ajout d'articles, sauf que si je le fais j'arrive pas à acceder à la classe Article DB


          if(isset($_SESSION['pseudo']) == false){
            header('Location: index.php');
          }
          else {

            if (isset($_POST['ok'])){
              echo "vous avez validé";

              $db = new articleDB();

              if(!$db){
                 echo $db->lastErrorMsg();
              }
              // else {
              //    echo "Base de données ouverte \n";
              // }

                 $sql ="INSERT INTO articles (nom,complement,prix,ref,categorie,photo)"."\n"."VALUES ('".$_POST['nom']."', '".$_POST['complement']."', '".$_POST['prix']."', '".$_POST['ref']."', '".$_POST['categorie']."', '".$_POST['photo']."');";


                 $ret = $db->exec($sql);
                 if(!$ret){
                    echo $db->lastErrorMsg();}
                 //  else {
                 //    echo "inscription réussie\n";
                 // }
                 $db->close();
            }
          }
            ?>

            <form class="" action="" method="post">
            <label for="nom">Nom du produit:</label>
            <input type="text" name="nom" id="nom" required/><br/>

            <label for="complement">Complement du produit:</label>
            <input type="text" name="complement" id="complement"/><br/>

            <label for="prix">Prix du produit:</label>
            <input type="number" name="prix" id="prix" step="0.01" required/><br/>

            <label for="ref">Référence du produit:</label>
            <input type="number" name="ref" id="ref" required/><br/>

            <label for="categorie">Catégorie:</label>
            <label for="C">classique</label>
            <input type="radio" name="categorie" value="classique" id="C" checked/>
            <label for="S">salée</label>
            <input type="radio" name="categorie" value="salée" id="S" />
            <label for="W">waffine</label>
            <input type="radio" name="categorie" value="waffine" id="W" /> <br/>

            <label for="photo">Nom de la photo:</label>
            <input type="text" name="photo" id="photo" required/><br/>
            <input type="submit" value="Valider "name="ok" />
            </form>
            <?php


        ////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////
      }
      elseif ($_GET['action']=='supprimer'){
          if(isset($_SESSION['pseudo']) == false){
            header('Location: index.php');
          }else {
            if (isset($_POST['ok'])){
              echo "vous avez validé";

              $dbSupp = new articleDB();

              if(!$dbSupp){
                 echo $dbSupp->lastErrorMsg();
              }
              // else {
              //    echo "Base de données ouverte \n";
              // }
                 $sql ="DELETE FROM articles WHERE reference='$_ref';";
                 $ret = $dbSupp->exec($sql);
          }

        // $db = new articleDB();
        // //$requete = "SELECT * from articles;";
        // //$ret = $db->exec($requete);
        //
        // $ret = $db->prepare("SELECT * from articles");
        // $ret-> execute();
        // //$x = $ret->fetchAll(PDO::FETCH_OBJ);
        // //while ($x = $ret->fetch(PDO::FETCH_OBJ)){
        //   echo $x->categorie;

        }

        //header('Location: supprimer-article.php');
      }
      ?>

      <form class="" action="" method="post">
        <h1>Supprimer un article</h1>

      <label for="ref">Référence du produit:</label>
      <input type="number" name="ref" id="ref" required/><br/>

      <input type="submit" value="Valider "name="ok" />
      </form>
      <?php
    }
  }
?>
<p>vous êtes connecté <?php echo $_SESSION['pseudo']; ?></p>
<a href="?action=ajouter"> Ajouter un produit</a>
<!--<a href="?action=ajouter"> Modifier un produit</a>
ça serait parfait de mettre ça sous forme de menu nav ou de boutons-->
<a href="?action=supprimer"> Modifier ou Supprimer un produit</a>
