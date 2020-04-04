<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href=design/"StylesheetValatria.css">
  <title>Waffle</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="design/StylesheetValatria.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/png" href="design/Favicon.png" />




</head>


<body>

  <header>
      <img src="design/banner2.png" alt="Banniere">


      <div class="navbar">
          <ul>
            <li><a href="Waffle.view.php">Accueil</a></li>
            <li><a href="#" aria-haspopup="true">Magasin</a>
              <ul class="dropdown" aria-label="submenu">
                <li><a href="Shop.view.php">Sucré</a></li>
                <li><a href="Sale.view.php">Salé</a></li>
              </ul>
            </li>
            <li><a href="https://valatria.createaforum.com/">Forum</a></li>
          </ul>
      </div>
  </header>

  <button onclick="window.location.href = '../admin/indexCo.php';" class="LOGIN" type="button">Se connecter</button>
  <button onclick="window.location.href = '../admin/inscription.php';" class="SIGNIN" type="button" >S'inscrire</button>

<h1>Panier</h1>
