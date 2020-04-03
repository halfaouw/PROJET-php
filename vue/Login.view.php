<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="design/Login.css">
    <title></title>


 <link rel="icon" type="image/png" href="design/favicon.png" />



  <div class="container">
    <label for="uname"><b>Pseudo ou email</b></label>
    <input type="email" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Mot de passe</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Se connecter</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Se rappeler de moi
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button onclick="window.location.href = 'Waffle.view.php';" class="cancelbtn">Annuler</button>
    <span class="psw"><a href="#">Mot de passe oublié?</a></span>
  </div>
</form>
