<header class="row mainHeader">
     <div  class="col-2">
          <div id="logoZone t-end" class="row">
               <img height="50px" src="./images/icons/logo1.png" alt="" srcset="">
          </div>
     </div>
     <div id="menuZone" class="col-7">
          <a href="./" class="col">Accueil</a>
          <a href="./about.php" class="col">A propos</a>
          <a href="./boutique.php" class="col">Boutique</a>
          <a href="./panier.php" class="col">Panier</a>
          <a href="./contact.php" class="col">Contact</a>
     </div>
     <div id="menuZone" class="col-2">
          <a href="./authentification.php" class='col'>
               <?php
                    if(isset($_SESSION['nom'])){
                         echo  $_SESSION['nom'];
                    }else{
                         echo "Authentification";
                    }
               ?>
          </a>
     </div>
</header>