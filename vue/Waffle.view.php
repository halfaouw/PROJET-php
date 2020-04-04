<?php

require_once('HeadFoot.view.php');
$HeadFoot = new HeadFoot('stylesheetShop.css');

echo "$HeadFoot->header"; //HEAD + HEADER + BALISE BODY OUVRANTE

 ?>

  <button onclick="window.location.href = '../model/indexCo.php';" class="LOGIN" type="button">Se connecter</button>
  <button onclick="window.location.href = '../model/inscription.php';" class="SIGNIN" type="button" >S'inscrire</button>
  <button onclick="window.location.href = '../model/panier.php';" class="panier" type="button" >Panier</button>


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

<?php

echo "$HeadFoot->footer"; //FOOTER + BALISE BODY FERMANTE

 ?>
