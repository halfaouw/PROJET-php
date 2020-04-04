<?php

require_once('HeadFoot.view.php');
$HeadFoot = new HeadFoot('stylesheetShop.css');

echo "$HeadFoot->header"; //HEAD + HEADER + BALISE BODY OUVRANTE

 ?>
  <button onclick="window.location.href = '../admin/indexCo.php';" class="LOGIN" type="button">Se connecter</button>
  <button onclick="window.location.href = '../admin/inscription.php';" class="SIGNIN" type="button" >S'inscrire</button>

<h1>Panier</h1>

</body>

<?php

echo "$HeadFoot->footer"; //FOOTER + BALISE BODY FERMANTE

 ?>
