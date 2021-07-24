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
				<form action="" method="post" enctype="multipart/form-data" class="col-12">
					<h2 class="row p-3">Ajouter un produit</h2>
					<div class="row p-2">
						<label for="nom" class="col-4">Nom du produit</label>
						<input class="input col-4" type="text" id="nom" name="nom" require >
					</div>
					<div class="row p-2">
						<label for="prix" class="col-4">Prix du produit</label>
						<input class="input col-4" type="number" id="prix" name="prix" require >
					</div>
					<div class="row p-2">
						<label for="categorie" class="col-4">Categorie du produit</label>
						<select name="cat">
							<option value="null">Choisir la categorie</option>
							<option value="1">Ordinateur</option>
							<option value="2">Telephone</option>
							<option value="3">Autre</option>
						</select>
					</div>
					<div class="row p-2">
						<label for="image" class="col-4">Image du produit</label>
						<input class="col-4" id="img" name='img' type="file"/>
					</div>
					<div class="row p-2">
						<label for="description" class="col-4">Description du produit</label>
						<textarea name="desc" id="desc" class='col-4 h-5'></textarea>
					</div>
					<div class='row'>
						<button class="col-2 btn btn-danger">Annuler</button>
						<input name="submit" type="submit" class="col-2 btn btn-primary" value="valider">
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