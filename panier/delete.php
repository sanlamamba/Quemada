<?php
	include("../components/head.php");
     echo $_GET['panier_id'];
     $del = $panier->delete_cart($_GET['panier_id']);
     if($del){
          header("Location:/quemada/panier.php");
     }else{
          header("Location:/quemada/panier.php");
     }
?>