<?php

require_once('HeadFoot.view.php');
$HeadFoot = new HeadFoot('stylesheetShop.css');

echo "$HeadFoot->header"; //HEAD + HEADER + BALISE BODY OUVRANTE

 ?>


  <button onclick="window.location.href = '../model/indexCo.php';" class="LOGIN" type="button">Se connecter</button>
  <button onclick="window.location.href = '../model/inscription.php';" class="SIGNIN" type="button" >S'inscrire</button>
  <button onclick="window.location.href = '../model/panier.php';" class="panier" type="button" >Panier</button>

  <div class="body">

    <h2>Tous nos articles </h2>';

<?php
foreach ($articles as $value) {
  echo " <div class=\"liste\"> ";
  $view = $value->getview();
  echo "$view";
  echo "  </div>";
}
?>



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




  <?php

  echo "$HeadFoot->footer"; //FOOTER + BALISE BODY FERMANTE

   ?>
