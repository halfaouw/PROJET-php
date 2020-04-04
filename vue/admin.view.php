<?php

require_once('HeadFoot.view.php');
$HeadFoot = new HeadFoot('stylesheetShop.css');

echo "$HeadFoot->header"; //HEAD + HEADER + BALISE BODY OUVRANTE

 ?>

  <button onclick="window.location.href = '../model/indexCo.php';" class="LOGIN" type="button">Se connecter</button>
  <button onclick="window.location.href = '../model/inscription.php';" class="SIGNIN" type="button" >S'inscrire</button>
  <button onclick="window.location.href = '../model/panier.php';" class="panier" type="button" >Panier</button>


  <form class="" action="" method="post">
  <label for="nom">Nom du produit:</label>
  <input type="text" name="nom" id="nom" required/><br/>

  <label for="complement">Complement du produit:</label>
  <input type="text" name="complement" id="complement"/><br/>

  <label for="prix">Prix du produit:</label>
  <input type="number" name="prix" id="prix" step="0.01" required/><br/>

  <label for="ref">Référence du produit:</label>
  <input type="number" name="ref" id="ref" required/><br/>

  <label for="categorie">Catégorie:</label>
  <label for="C">classique</label>
  <input type="radio" name="categorie" value="classique" id="C" checked/>
  <label for="S">salée</label>
  <input type="radio" name="categorie" value="salée" id="S" />
  <label for="W">waffine</label>
  <input type="radio" name="categorie" value="waffine" id="W" /> <br/>

  <label for="photo">Nom de la photo:</label>
  <input type="text" name="photo" id="photo" required/><br/>
  <input type="submit" value="Valider "name="ok" />
  </form>

</body>


<?php

echo "$HeadFoot->footer"; //FOOTER + BALISE BODY FERMANTE

 ?>
