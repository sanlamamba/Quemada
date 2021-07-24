<!DOCTYPE html>
<html lang="en">
<?php
	include("./components/head.php")
?>
<body>
	<div id="adminContainer">
		<?php
			require_once("./components/sidebar.php")
		?>
		<section id="adminScreen" class="container-fluid">
			<div class="row spacer"></div>
			<form class="row">
				<h3>Information de la commande</h3>
				<div class="col-12">
					<div class="row">
						<table class="col-12">
							<tr class="row">
								<th class="col-1">ID</th>
								<th class="col">Nom Client</th>
								<th class="col">montant</th>
								<th class="col">status</th>
								<th class="col-1">Valider</th>
								<th class="col-1">Rejeter</th>
							</tr>
							<?php 
								// $data = $commande->read_commande_by_cart("yWm1s8T0pS");
								$data = $commande->read_commande_by_cart("mOv3PfdA0B");
								foreach ($data as $datum) {?>
							<!-- LOOP HERE -->
							<tr class="row">
								<td class="col-1"><?php echo $datum['id'] ?></td>
								<td class="col"><?php echo $datum['nom_client']; echo " "; echo $datum['prenom_client'];  ?></td>
								<td class="col"><?php echo $datum['total'] ?> FCFA</td>
								<td class="col"><?php echo $datum['status_commande'] ?></td>
								<td class="col-1">
									<a href="./update.php?fini=true&id=<?php echo $datum['id'] ?>" class="row">
										<label class="col-8 btn btn-light">+</label>
									</a>
								</td>
								<td class="col-1">
									<a href="./update.php?rejeter=true&id=<?php echo $datum['id'] ?>" class="row">
										<label class="col-8 btn btn-light">-</label>
									</a>
								</td>
								
								
								
								
							</tr>
							<?php } ?>
						</table>
					
					</div>
					<div class="row">
						<h2>Contenu de la commande </h2>
						<table class="col-12">
							<tr class="row">
								<th class="col-1">ID</th>
								<th class="col">Label</th>
								<th class="col">Quantite</th>
								<th class="col">prix</th>
								<th class="col">Prix total</th>
								<th class="col-1"><h6>Voir</h6></th>
							</tr>

							<?php 
							$conCommande = $panier->read_cart_by_cart("mOv3PfdA0B");
							foreach($conCommande as $produit){?>
								<tr class="row">
									<td class="col-1"><?php echo $produit["id"] ?></td>
									<td class="col"><?php echo $produit["nom"] ?></td>
									<td class="col"><?php echo $produit["quantite"] ?></td>
									<td class="col"><?php echo $produit["prix"] ?></td>
									<td class="col"><?php echo bcmul($produit['quantite'], $produit['prix']) ?></td>
									<td class="col-1">
										<a href="/quemada/produit.php?product_num=<?php echo $produit['id'] ?>" class="row">
											<label class="col-8 btn btn-light">X</label>
										</a>
									</td>
									
									
								</tr>
							<?php } ?>
						</table>
					</div>
				</div>
			</form>
		</section>
	</div>
</body>
</html>