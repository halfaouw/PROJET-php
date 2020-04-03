<!--pour avoir une feuille de style il faudra faire un link -->
<link rel="stylesheet" type="text/css" href="../vue/design/Login.css">
<link rel="icon" type="image/png" href="../vue/design/Favicon.png" />

<h1>
    Essaye de te connecter :
</h1>

<form action="inscription.php" method="post">

  <label for="uname">Nom:</label>
  <input type="name" name="uname" id="name" required/><br/><br/>
  <label for="uname">Prénom:</label>
  <input type="surname" name="uname" id="surname" required/><br/><br/>
  <label for="uname">E-mail:</label>
  <input type="email" name="uname" id="uname" required/><br/><br/>
  <label for="psw">Choisissez un mot de passe:</label>
  <input type="password" name="psw" id="psw" required/><br/><br/>
  <button type="submit">Finaliser l'inscription</button>
  <div class="container" style="background-color:#f1f1f1">
  <button onclick="window.location.href = '../vue/Waffle.view.php';" class="cancelbtn">Annuler</button>

  </div>
</form>
