<?php

     require("".$_SERVER['DOCUMENT_ROOT']."/quemada/backend/classes/Produit.php");
     
     $produit = new Produit();
     
     require("".$_SERVER['DOCUMENT_ROOT']."/quemada/backend/classes/Client.php");
     
     $client = new Client();
     
     require("".$_SERVER['DOCUMENT_ROOT']."/quemada/backend/classes/Panier.php");
     
     $panier = new Panier();
     
     require("".$_SERVER['DOCUMENT_ROOT']."/quemada/backend/classes/Commande.php");
     
     $commande = new Commande();
     
     require("".$_SERVER['DOCUMENT_ROOT']."/quemada/backend/classes/Admin.php");
     
     $admin = new Admin();
     
     
     
     

     