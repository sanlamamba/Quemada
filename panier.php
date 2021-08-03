<!DOCTYPE html>
<html lang="en">
<?php
	include("./components/head.php");
     $data_panier = null;
     if(isset($_SESSION['panier'])){
          $data_panier = $panier->read_cart($_SESSION['panier']);

     }else{
          header('Location: /quemada/authentification.php');

     }
     if(isset($_GET['checkout'])){
          echo "<script> alert('Votre commande a ete pris en compte, vous pouvez voir sa progression sur la page COMPTE') </script>";

     }
     
?>
<body>
	<div id="mainContainer" class="container-fluid">
		<!-- HEADER -->
		<?php
			include("./components/header.php")
		?>
		<!-- CONTENT -->
		<section class="container">
               <div class="row spacer"></div>
               <div class="row">
                    <table class="col-12">
                         <tr class="row">
                              <th class="col">Nombre</th>
                              <th class="col">Label</th>
                              <th class="col">prix</th>
                              <th class="col">prix total</th>
                              <th class="col">Retirer</th>
                         </tr>

                         <?php
                              $total_array= array();
                              $prod_array = array();
                              if(!is_iterable($data_panier)){
                                   $data_panier = array($data_panier);
                              }
                              foreach ($data_panier as $prod ) {?>
                                   
                         <tr class="row">
                              <td class="col"><?php echo $prod['quantite'] ?></td>
                              <td class="col"><?php echo $prod['nom'] ?></td>
                              <td class="col"><?php echo number_format($prod['prix']) ?> F</td>
                              <td class="col"><?php $current = bcmul($prod['prix'], $prod['quantite']); array_push($total_array,$current); echo number_format($current); ?> F</td>
                              <td class="col">
                                   <a href="./panier/delete.php?panier_id=<?php echo $prod['id']; ?>" class="row">
                                        <button class="col-8 btn btn-light">X</button>
                                   </a>
                              </td>
                         </tr>
                         <?php } ?>
                    </table>
                    <table class="col-12 h-5">
                         <th class="col-6"></th>
                         <th class="col-2">Total a payer</th>
                         <th class="col-4"><?php echo number_format(array_sum($total_array))?> FCFA</th>
                    </table>
                    <div class="col-6">
                         <button class="btn btn-secondary"> Abandonner la commande</button>
                    </div>
                    <div class="col-6">
                         <a href="./panier/checkout.php?total=<?php echo array_sum($total_array)?>&panier=<?php echo $_SESSION['panier']?>&id_client=<?php echo $_SESSION['id']?>"><button class="btn btn-primary"> Finaliser la commande</button></a>
                    </div>
               </div>
               <div class="row spacer"></div>

          </section>
		<?php
			include("./components/footer.php")
		?>
	</div>
</body>
</html>