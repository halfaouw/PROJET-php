<?php
session_start();
  if(isset($_SESSION['pseudo']) == false){
    header('Location: index.php');
  }
  else {
    if (isset($_GET['action'])){
      if($_GET['action']=='ajouter'){
        if (isset($_POST['ok'])){
          echo "vous avez validé";
          $nom=$_POST['nom'];
          $prix=$_POST['prix'];
          $description=$_POST['description'];
          //header('Location: article.php');
        }
      ?>
      <form class="" action="" method="post">
        <label for="nom">Nom du produit:</label>
        <input type="text" name="nom" id="nom" required/><br/>

        <label for="prix">Prix du produit:</label>
        <input type="number" name="prix" id="prix" step="0.01" required/><br/>

        <label for="description">Description du produit:</label>
        <textarea name="description" id="description" rows="5" cols="33"></textarea>
        <input type="submit" value="Valider "name="ok" />
      </form>
      <?php
      }
      elseif ($_GET['action']=='supprimer'){
        // code...
      }
    }
  }
?>
<p>vous êtes connecté <?php echo $_SESSION['pseudo']; ?></p>
<a href="?action=ajouter"> Ajouter un produit</a>
<!--<a href="?action=ajouter"> Modifier un produit</a>
ça serait parfait de mettre ça sous forme de menu nav ou de boutons-->
<a href="?action=supprimer"> Supprimer un produit</a>
