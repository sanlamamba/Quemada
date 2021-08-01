<!DOCTYPE html>
<html lang="en">
<?php
	include("./components/head.php")
?>
<body id="cont">
	<div id="mainContainer" class="container-fluid">
		<!-- HEADER -->
		<?php
			include("./components/header.php")
		?>

		<!-- CONTENT -->
		<section id="home" class="container-fluid">
			<!-- SLIDER -->
			<div id="slider" class="col-12">
				<div class="row container">
					<h6 class="col-12">
						Ordinateur - Windows
					</h6>
					<h1 class="col-12">
						Nouvelle Arrivage ordinateur<br/> HP pour tous
					</h1>
					<h4>-25% sur toutes la gamme windows</h4>
				</div>
			</div>
		</section>
		<div class="row spacer"></div>
		<div id="categoryGrid">
			<div class="row">
				<a href="./boutique.php?filtre=ordinateur" id="hommeCat" class="col-sm-6 col-md-4 no-clout">
					<h3>Ordinateur</h3>
					<h6>80+</h6>
					<button class="btn btn-one">Voir tout</button>
				</a>
				<a href="./boutique.php?filtre=telephone" id="femmeCat" class="col-sm-6 col-md-4 no-clout">
					<h3>Telephone</h3>
					<h6>90+</h6>
					<button class="btn btn-one">Voir tout</button>
				</a>
				<a href="./boutique.php?filtre=accessoire" id="accesoireCat" class="col-sm-6 col-md-4 no-clout">
					<h3>Accessoire</h3>
					<h6>250+</h6>
					<button class="btn btn-one">Voir tout</button>
				</a>
			</div>
			
			
		</div>
		<div class="row spacer"></div>
		<section id="productOverview" class="container">
			<div class="row">
				<h1 class="col-12">
					Product Overview
				</h1>
				<div class="col-12" id="productCategory"> 
					<breadcrumb>
						<h6>Produit</h6>
						<h6>></h6>
						<h6>Tous</h6>
					</breadcrumb>
				</div>
				<div class="col-12">
					<?php
						include("./components/product_grid_limit.php");
					?>
				</div>
			</div>
		</section>
		<div class="row spacer"></div>
		<?php
			include("./components/footer.php")
		?>
	</div>

</body>
</html>