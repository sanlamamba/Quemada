<!DOCTYPE html>
<html lang="en">
<?php
	include("./components/head.php")
?>
<body>
	<div id="mainContainer" class="container-fluid">
		<!-- HEADER -->
		<?php
			include("./components/header.php")
		?>

		<!-- CONTENT -->
		<section id="productOverview" class="container">
			<div class="row">
				<h1 class="col-12">
					Boutique
				</h1>
				<div class="col-12" id="productCategory"> 
					<breadcrumb>
						<h6>Produit</h6>
						<h6>></h6>
						<h6>Homme</h6>
					</breadcrumb>
				</div>
				<div class="col-12">
					<?php
						include("./components/product_grid.php");
					?>
				</div>
			</div>
		</section>
		</section>
          <div class="row spacer"></div>
		<?php
			include("./components/footer.php")
		?>
	</div>
</body>
</html>