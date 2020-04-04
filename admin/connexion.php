
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

    echo '<p><strong> Mot de passe ou identifiant incorrect </strong></p>';
  }
$db->close();
?>
