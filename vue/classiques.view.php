<?php

require_once('HeadFoot.view.php');
$HeadFoot = new HeadFoot('stylesheetShop.css');

echo "$HeadFoot->header"; //HEAD + HEADER + BALISE BODY OUVRANTE

 ?>

  <button onclick="window.location.href = '../model/indexCo.php';" class="LOGIN" type="button">Se connecter</button>
  <button onclick="window.location.href = '../model/inscription.php';" class="SIGNIN" type="button" >S'inscrire</button>
  <button onclick="window.location.href = '../model/panier.php';" class="panier" type="button" >Panier</button>

<h2>Nos gaufres classiques </h2>
<?php
foreach ($classiques as $value) {
  echo " <div class=\"liste\"> ";
  $view = $value->getview();
  echo "$view";
  echo "  </div>";
}
?>

</body>

<?php

echo "$HeadFoot->footer"; //FOOTER + BALISE BODY FERMANTE

 ?>
