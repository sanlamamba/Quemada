<?php 
	include("./components/head.php");
     
     if(isset($_GET['delete'])){
          $del = $produit->delete_produit($_GET['product_num']);
          echo $del;
          header("Location:/quemada/admin/liste_produit.php");
     }
     if(isset($_GET['fini'])){
          $upda = $commande->finir_commande($_GET['id']);
          header("Location:/quemada/admin/liste_commande.php");
     }
     if(isset($_GET['rejeter'])){
          $upda = $commande->rejeter_commande($_GET['id']);
          header("Location:/quemada/admin/liste_commande.php");
     }
     