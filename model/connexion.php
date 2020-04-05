
<?php
session_start();
$id=$_POST['uname'];
$mdp=$_POST['psw'];
// $sql= "SELECT mdp FROM inscrits WHERE email='$id'";
//   if ($mdp == $sql){

  if (($id == "test@gmail.com") AND ($mdp == "test")){ // Si le mot de passe et l'id est bon
    $_SESSION['pseudo']=$id;
    //echo '<p><strong> Connexion réussie! </strong></p>';
    header('Location: admin.php');

  }
  else{ // Sinon, on affiche un message d'erreur
  //   class articleDB extends SQLite3
  $maildebut = substr($id, 0, strpos($id, "@"));
  $mailfin = substr($id, strpos($id, "@")+1, strlen($id));


  class usersDB extends SQLite3
  {
     function __construct()
     {
        $this->open('../BDD/test.db');
     }
  }
      $db = new usersDB();
      $result = $db->query("SELECT mdp FROM inscrits WHERE email ='".$maildebut."@".$mailfin."'".';');
      $verifMDP = $result->fetchArray();
      var_dump($verifMDP[0]);

      if ($verifMDP[0] == $mdp){
        echo "OK , vous etes connecté";
        echo '<form action="../vue/Waffle.view.php" >
            <button class="cancelbtn">Retour à la page d"accueil</button>
        </form>'; 
      }
      else {
        echo "identifiant ou mot de passe incorrecte";
      }

    }

  //
  // echo '<p><strong> Mot de passe ou identifiant incorrect </strong></p>';
  // }
// $db->close();
?>
