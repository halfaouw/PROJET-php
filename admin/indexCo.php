<!--pour avoir une feuille de style il faudra faire un link -->
<link rel="stylesheet" type="text/css" href="../vue/design/Login.css">
<link rel="icon" type="image/png" href="../vue/design/Favicon.png" />

<h1>
    Essaye de te connecter :
</h1>

<form action="connexion.php" method="post">

  <label for="uname">Email:</label>
  <input type="email" name="uname" id="uname" required/><br/><br/>
  <label for="psw">Mot de passe:</label>
  <input type="password" name="psw" id="psw" required/><br/><br/>
  <button type="submit">Se connecter</button>
  <div class="container" style="background-color:#f1f1f1">
    <button onclick="window.location.href = '../vue/Waffle.view.php';" class="cancelbtn">Annuler</button>
    <span class="psw"><a href="#">Mot de passe oublié?</a></span>
  </div>
</form>
