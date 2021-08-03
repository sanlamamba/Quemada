<!DOCTYPE html>
<html lang="en">
<?php

	include("./components/head.php");
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
		$insertProduct = $produit->create_produit($_POST, $_FILES);
		header("Location:/quemada/admin/liste_produit.php");
	}
?>
<body>
	<div id="adminContainer">
		<?php
			require_once("./components/sidebar.php")
		?>
		<section id="adminScreen" class="container-fluid">
			<div class='row'>
				<form action="" method="post" enctype="multipart/form-data" class="form-control col-12">
					<h2 class="row p-3">Ajouter un produit</h2>
					<div class="row">
						
						<div class="col-6">
							<div class="form-group">
								<label for="nom">Nom du produit</label>
								<input class="form-control col-11" type="text" id="nom" name="nom" required >
							</div>
							<div class="form-group">
								<label for="prix" >Prix du produit</label>
								<input class="form-control col-11" type="number" id="prix" name="prix" required >
							</div>
							<div class="form-group">
								<label for="categorie" class="">Categorie du produit</label>
								<select class="form-control col-11" name="cat">
									<option value="null">Choisir la categorie</option>
									<option value="1">Ordinateur</option>
									<option value="2">Telephone</option>
									<option value="3">Autre</option>
								</select>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="image">Image du produit</label>
								<input class="form-control col-11" id="img" name='img' type="file"/>
							</div>
							<div class="form-group">
								<label for="description">Description du produit</label>
								<textarea name="desc" id="desc" class='form-control col-11 h-10'></textarea>
							</div>
							<div class='row'>
								<button class="col-2 btn btn-danger">Annuler</button>
								<input name="submit" style="height: 40px;" type="submit" class="col-2 btn btn-primary" value="valider">
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="row">
				<?php 
					if (isset($insertProduct)) {
						echo $insertProduct;
					}
				?>  
			</div>
		</section>
	</div>
</body>
</html>