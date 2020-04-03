<!--pour avoir une feuille de style il faudra faire un link -->
<h1>
    Essaye de te connecter :
</h1>

<form action="connexion.php" method="post">

  <label for="id">Email:</label>
  <input type="email" name="id" id="id" required/><br/><br/>
  <label for="mdp">Mot de passe:</label>
  <input type="password" name="mdp" id="mdp" required/><br/><br/>
  <input type="submit" value="Connexion" />
</form>
