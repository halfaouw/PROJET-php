<?php
session_start();

if(isset($_POST['name'])){
  $id=$_POST['email'];
if($_POST['name'] !=""){

  class usersDB extends SQLite3
  {
     function __construct()
     {
        $this->open('../BDD/test.db');
     }
  }
  $db = new usersDB();
  if(!$db){
     echo $db->lastErrorMsg();
  }
  else {
     echo "Base de données ouverte \n";
  }
    // $test="SELECT * FROM incrits WHERE email='".$_POST['email'].";'";
    // if ($test != NULL){
    //   $sql ="INSERT INTO inscrits (nom,prenom,email,mdp)"."\n"."VALUES ('".$_POST['name']."', '".$_POST['username']."', '".$_POST['email']."', '".$_POST['pwd']."');";
    // }
    // else{
    //   echo'Un compte avec ce mail existe déja'
    // }

    $maildebut = substr($id, 0, strpos($id, "@"));
    $mailfin = substr($id, strpos($id, "@")+1, strlen($id));


    $test = $db->query("SELECT email FROM inscrits WHERE email ='".$maildebut."@".$mailfin."'".';');
    $verifMail = $test->fetchArray();
    var_dump($verifMail[0]);

    if($verifMail[0]== $id){
      echo"ce compte existe déja , veuillez vous connecter";
    }
    else{
      $sql ="INSERT INTO inscrits (nom,prenom,email,mdp)"."\n"."VALUES ('".$_POST['name']."', '".$_POST['username']."', '".$_POST['email']."', '".$_POST['pwd']."');";


       $ret = $db->exec($sql);
       if(!$ret){
          echo $db->lastErrorMsg();}
       //  else {
       //    echo "inscription réussie\n";
       // }
       $db->close();
    }


}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../vue/design/Login.css">
  <link rel="icon" type="image/png" href="../vue/design/Favicon.png" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Sign Up now!</h2>

  <form role="form" method="post" action="inscription.php">
    <div class="form-group">
      <label for="name">Nom:</label>
      <input type="text" name="name" placeholder="Entrez votre nom" required>
    </div>
    <div class="form-group">
      <label for="username">Prénom:</label>
      <input type="text" name="username" placeholder="Entrez votre prénom" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" placeholder="Entrez votre email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Mot de passe:</label>
      <input type="password" name="pwd" placeholder="Entrez votre mot de passe" required>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>

  </form>
  <form action="../vue/Waffle.view.php" >
      <button class="cancelbtn">Retour à la page d'accueil</button>
  </form>
</div>

</body>
</html>
