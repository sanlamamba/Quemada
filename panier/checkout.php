<?php
	include("../components/head.php");
     $total = $_GET['total'];
     $cart_id = $_GET['panier'];
     $id_client = $_GET['id_client'];
     $create_commande = $commande->create_commande($id_client,$cart_id,$total);
     echo $id_client;
     $panier_id = randStr();
     $_SESSION['panier']=$panier_id;
     header("Location:/quemada/panier.php")
?>