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


  <h1>Meilleurs ventes </h1>


<div class="centre">

      <div class="Slider">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">

          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="design/waffle1.jpg" alt="Tractor1" style="width:100%;">
            </div>

            <div class="item">
              <img src="design/waffle2.jpg" alt="Tractor2" style="width:100%;">
            </div>

            <div class="item">
              <img src="design/waffle3.jpg" alt="Tractor 3" style="width:100%;">
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

      </div>
</div>

</body>

<footer>

  <div class="footer">

    <ul>
      <li><a href="AboutUs.view.php">Qui somme-nous? </a></li>
      <li><a href="feedback.view.php">Avis</a></li>
    </ul>

  <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
  <a href="https://twitter.com/" class="fa fa-twitter"></a>
  <a href="https://fr.linkedin.com/" class="fa fa-linkedin"></a>
  <a href="#" class="fa fa-instagram"></a>
  <p>Copyright@TheWaffleProject-2020</p>

  </div>

</footer>

</html>
