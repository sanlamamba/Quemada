<!DOCTYPE html>
<html lang="en">
<?php
	include("./components/head.php")
?>
<body>
	<div id="adminContainer">
		<?php
			require_once("./components/sidebar.php");
			if(isset($_POST['modifier'])){
				$mod = null;
				if($_FILES['img']['size'] == 0 && $_FILES['img']['error'] == 0){
					$mod = $produit->update_produit($_POST['id'],$_POST, $_POST['old_cat']);
				}else{
					$mod = $produit->update_produit($_POST['id'],$_POST,"");

				}
				echo $mod;
			}
		?>
		<section id="adminScreen" class="container-fluid">
			<div class='row'>
				<h2 class="col-12 p-3">Modifier un produitt</h2>
				
				<?php 
					if (isset($_GET['product_num'])) {	
						$data = $produit->read_produits_id($_GET['product_num']);
						foreach ($data as $prod) {
							
					?>
				<form action="" method="post" enctype="multipart/form-data" class="col-12">
					<div class="row p-2">
						<label for="nom" class="col-4">ID du produit</label>
						<label for="nom" class="col-4"><?php echo $_GET['product_num'] ?></label>
						<input style="display: none;" value="<?php echo $_GET['product_num'] ?>" class=" idProd input col-4" type="text" id="id" name="id" require >
					</div>
					<div class="row p-2">
						<label for="nom" class="col-4">Nom du produit</label>
						<input value="<?php echo $prod['nom_produit'] ?>" class="input col-4" type="text" id="nom" name="nom" require >
					</div>
					
					
					<div class="row p-2">
						<label for="prix" class="col-4">Prix du produit</label>
						<input value="<?php echo $prod['prix'] ?>" class="input col-4" type="number" id="prix" name="prix" require >
					</div>
					<div class="row p-2">
						<label for="categorie" class="col-4">Categorie du produit</label>
						<select class="col-4" name="cat">
							<option value="null">Choisir la categorie</option>
							<option value="1">Ordinateur</option>
							<option value="2">Telephone</option>
							<option value="3">Autre</option>
						</select>
						<input style="display: none;" value="<?php echo $_GET['product_num'] ?>" class=" idProd input col-4" type="text" id="old_cat" name="old_cat" require >
						<div class="col-4">
							Presentement : <?php if($prod['categorie'] == 1){ echo "Ordinateur";}else if($prod['categorie'] == 2){ echo "Telephone"; }else{ echo "Autre";}?>
						</div>
					</div>
					<div class="row p-2">
						<label for="image" class="col-4">Image du produit</label>
						<input type="file" name="img" id="img" class='col-4'>
						
					</div>
					<div class="row p-2">
						<label for="description" class="col-4">Description du produit</label>
						<textarea  name="desc" id="desc" class='col-4 h-9'><?php echo $prod['description'] ?></textarea>

					</div>
					<div class='row'>
						<button class="col-2 btn btn-danger">Annuler</button>
						<input type="submit" class="col-2 btn btn-primary" value="valider" name="modifier">
					</div>
				</form>
				<?php
					}}
				?>
			</div>
		</section>
	</div>
</body>
</html>