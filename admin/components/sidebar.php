<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
    <a href="/quemada" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
    <img src="../images/icons/logo1.png" height="50px" alt="" srcset="">

    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="./dashboard.php" class="nav-link active" aria-current="page">

        &#127968; 
        Accueil
        </a>
      </li>

        <a href="./liste_produit.php" class="nav-link link-dark">
          &#9755; 
          Liste produit
        </a>
        </li>
        <li>
        <a href="./ajouter_produit.php" class="nav-link link-dark">
          &#9755; 
          Ajouter un produit
        </a>
        </li>
        <li>
        <a href="./liste_commande.php" class="nav-link link-dark">
          &#9755; 
          Liste des Commandes
        </a>
        </li>
        <li>
        <a href="./liste_client.php" class="nav-link link-dark">
          &#9755; 
          Liste des Clients
        </a>
        </li>

      
    </ul>
    <hr>
    <div class="dropdown">
      <a  class="row" >

          <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                &#128100; 

               <span class="fs-4">
                    <strong> <?php echo $_SESSION["nom"]; ?> </strong>
                    <p>Administrateur</p>
                    <a href="#" class="link-danger">Deconnexion</a>
               </span>
          </a>
      </a>
      
    </div>
  </div>