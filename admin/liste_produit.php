<!DOCTYPE html>
<html lang="en">
<?php
     require_once("".$_SERVER['DOCUMENT_ROOT']."/quemada/backend/instances/instances.php");

	$data = $produit->read_produits();
	// echo $_SERVER['DOCUMENT_ROOT'];
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
				<h3>Liste des produits sur le liste</h3>
				<div class="col-12">
					<div class="row">
						<table class="col-12">
							<tr class="row">
								<th class="col-1">ID</th>
								<th class="col">Label</th>
								<th class="col">Categorie</th>
								<th class="col">prix</th>
								<th class="col-1"><h6>Retirer</h6></th>
								<th class="col-1"><h6>Modifier</h6></th>
								<th class="col-1"><h6>Voir</h6></th>
							</tr>

							<?php foreach($data as $produit){?>
								<tr class="row">
									<td class="col-1"><?php echo $produit["id"] ?></td>
									<td class="col"><?php echo $produit["nom_produit"] ?></td>
									<td class="col"><?php echo $produit["label"] ?></td>
									<td class="col"><?php echo $produit["prix"] ?></td>
									<td class="col-1">
										<a href="./update.php?delete=true&product_num=<?php echo $produit['id']?>" class="row">
											<label class="col-8 btn btn-light">X</label>
										</a>
									</td>
									<td class="col-1">
										<a href="/quemada/admin/modifier_produit.php?product_num=<?php echo $produit['id'] ?>" class="row">
											<label class="col-8 btn btn-light">X</label>
										</a>
									</td>
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