<!DOCTYPE html>
<html lang="en">
<?php
     require_once("".$_SERVER['DOCUMENT_ROOT']."/quemada/backend/instances/instances.php");

	$data = $produit->read_produits();
	if(isset($_GET['filter'])){
		$data = $produit->read_produits_categorie($_GET["filter"]);
	}
	if(!is_iterable($data)){
		$data = array();
	}
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
				<h2 class="text-muted col-12">Liste des produits</h2>
				<div class="col-3">Filtre :</div>
				<div class="col-2"><a href="./liste_produit.php" class="row form-control">Tout</a></div>
				<div class="col-2"><a href="./liste_produit.php?filter=ordinateur" class="row form-control">ordinateur</a></div>
				<div class="col-2"><a href="./liste_produit.php?filter=telephone" class="row form-control">Telephone</a></div>
				<div class="col-2"><a href="./liste_produit.php?filter=accesoire" class="form-control row">Accesoire</a></div>
				<div class="col-12">
					<div class="row">
						<table class=" table col-12">
							<tr class="row">
								<th class="col-1">ID</th>
								<th class="col">Label</th>
								<th class="col">Categorie</th>
								<th class="col">prix</th>
								<th class="col-1"><h6></h6></th>
								<th class="col-1"><h6></h6></th>
								<th class="col-1"><h6></h6></th>
							</tr>

							<?php foreach($data as $produit){?>
								<tr class="row">
									<td class="col-1"><?php echo $produit["id"] ?></td>
									<td class="col"><?php echo $produit["nom_produit"] ?></td>
									<td class="col"><?php echo $produit["label"] ?></td>
									<td class="col"><?php echo $produit["prix"] ?></td>
									<td class="col-1">
										<a href="./update.php?delete=true&product_num=<?php echo $produit['id']?>" class="row">
											&#128465;
											
										</a>
									</td>
									<td class="col-1">
										<a href="/quemada/admin/modifier_produit.php?product_num=<?php echo $produit['id'] ?>" class="row">
											&#9998;
										</a>
									</td>
									<td class="col-1">
										<a href="/quemada/produit.php?product_num=<?php echo $produit['id'] ?>" class="row">
											&#128065;

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