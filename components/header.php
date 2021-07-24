<header class="row mainHeader">
     <div id="logoZone" class="col-2">
          
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
                         echo "Bienvenu, ". $_SESSION['nom'];
                    }else{
                         echo "Connection - Inscription";
                    }
               ?>
          </a>
     </div>
</header>