<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href=design/"StylesheetShop.css">
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
                <li><a href="#">Salé</a></li>
              </ul>
            </li>
            <li><a href="https://valatria.createaforum.com/">Forum</a></li>
          </ul>
      </div>
  </header>

  <button onclick="window.location.href = '../admin/indexCo.php';" class="LOGIN" type="button">Se connecter</button>
  <button onclick="window.location.href = '../admin/indexInsc.php';" class="SIGNIN" type="button" >S'inscrire</button>



<div class="body">

  <h2>Spare parts and other products</h2>


  <div class="liste">

<div class="ligne">
  <div class="article">
    <img src="design/sparepart1.jpg" alt="Tractor image">
    <div>
        <div class="header">
          <h1>NTJ1400 - TANDEM HYDRAULIC PUMP (SEE PART NO NT1598)</h1>
          <p>330€</p>
        </div>
        <p><b>Description :</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
        <div class="button_cont" align="center"><a class="example_d" href="#" >Ajouter au panier</a></div>
    </div>
  </div>

  <div class="article">
    <img src="design/sparepart2.jpg" alt="Tractor image">
    <div>
        <div class="header">
          <h1>37H7937 - FUEL FILTER (LONG)</h1>
          <p>6.50 €</p>
        </div>
        <p><b>Description :</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
        <div class="button_cont" align="center"><a class="example_d" href="#" >Ajouter au panier</a></div>
    </div>
  </div>
</div>

<div class="ligne">
  <div class="article">
    <img src="design/sparepart3.jpg" alt="Tractor image">
    <div>
        <div class="header">
          <h1>NT5925 - TIE ROD PIN & BUSH KIT</h1>
          <p>33.5 €</p>
        </div>
        <p><b>Description :</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
        <div class="button_cont" align="center"><a class="example_d" href="#" >Ajouter au panier</a></div>
    </div>
  </div>

  <div class="article">
    <img src="design/sparepart4.png" alt="Tractor image">
    <div>
        <div class="header">
          <h1>CTJ6409 - POWER STEERING PUMP</h1>
          <p>175.0 €</p>
        </div>
        <p><b>Description :</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
        <div class="button_cont" align="center"><a class="example_d" href="#" >Ajouter au panier</a></div>
    </div>
  </div>
</div>

<div class="ligne">
  <div class="article">
    <img src="design/sparepart5.jpg" alt="Tractor image">
    <div>
        <div class="header">
          <h1>BTJ370 - 2 SPEED GEAR ASSEMBLY</h1>
          <p>321.50 €</p>
        </div>
        <p><b>Description :</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
        <div class="button_cont" align="center"><a class="example_d" href="#" >Ajouter au panier</a></div>
    </div>
  </div>

  <div class="article" id="outoforder">
    <img src="design/sparepart6.jpg" alt="Tractor image">
    <div>
        <div class="header">
          <h1>NT8373 - TACHO CABLE ANGLE DRIVE</h1>
          <p>250 €</p>
        </div>
        <p><b>Description :</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
        <div class="button_cont" align="center"><a class="example_e" href="#" >Article indisponible</a></div>
    </div>
  </div>
</div>


  </div>

  <div class="pages">
    <a href="#" class="previous round"><b>&#8249;</b></a>
    <ul>
      <li> <a href="#">1</a> </li>
      <li> <a href="#">2</a> </li>
      <li> <a href="#">3</a> </li>
      <li> <a href="#">4</a> </li>
      <li> <a href="#">5</a> </li>
      <li> <a>...</a> </li>
    </ul>
    <a href="#" class="next round"><b>&#8250;</b></a>
  </div>

</div>







  </body>



  <footer>

    <div class="footer">

      <ul>
        <li><a href="AboutUs.view.php"> Qui somme-nous ? </a></li>
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
