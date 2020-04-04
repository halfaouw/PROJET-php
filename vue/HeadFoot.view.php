<?php


class HeadFoot{

  public $header;
  public $footer;

  function __construct($css) {
      $this->header ='<!DOCTYPE html>
      <html lang="en">
      <head>
        <link rel="stylesheet" type="text/css" href=../vue/design/'.$css.'>
        <title>Waffle</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="design/StylesheetValatria.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="icon" type="image/png" href="../vue/design/Favicon.png" />




      </head>


      <body>

        <header>
            <img src="../vue/design/banner2.png" alt="Banniere">


            <div class="navbar">
                <ul>
                  <li><a href="../controleur/main.ctrl.php">Accueil</a></li>
                  <li><a href="../controleur/main.ctrl.php" aria-haspopup="true">Magasin</a>
                    <ul class="dropdown" aria-label="submenu">
                      <li><a href="../controleur/articles.ctrl.php">tous les articles</a></li>
                      <li><a href="../controleur/classique.ctrl.php">Classiques</a></li>
                      <li><a href="../controleur/Sale.ctrl.php">Salé</a></li>
                      <li><a href="../controleur/waffine.ctrl.php">waffine</a></li>

                    </ul>
                  </li>
                  <li><a href="https://valatria.createaforum.com/">Forum</a></li>
                </ul>
            </div>
        </header>';


        $this->footer = '<footer>

          <div class="footer">

            <ul>
              <li><a href="AboutUs.view.php">Qui somme-nous? </a></li>
            </ul>

          <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
          <a href="https://twitter.com/" class="fa fa-twitter"></a>
          <a href="https://fr.linkedin.com/" class="fa fa-linkedin"></a>
          <a href="#" class="fa fa-instagram"></a>
          <p>Copyright@TheWaffleProject-2020</p>

          </div>

        </footer>

        </html>';
      }
    }


     ?>
