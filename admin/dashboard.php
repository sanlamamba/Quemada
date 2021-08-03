<!DOCTYPE html>
<html lang="en">
<?php
	include("./components/head.php");
	$countPor = $produit->count_produits();
	$countCom = $commande->count_commande();
	$countCli = $client->count_clients();
?>
<body>
	<div id="adminContainer">
		<?php
			require_once("./components/sidebar.php")
		?>
		<section id="adminScreen" class="container-fluid">
			<div class="row spacer"></div>
			<p class="text-muted">Bienvenue, <?php echo $_SESSION["pseudo"]; ?></p>

			<h2 class="text-muted">&#12930; Tableau de bord</h2>
			<div class="row">
				<div class="form-control col">
					<h4 class="row px-3">Nombre des produits</h4>
					<div class="row px-3">
						<h1>&#9814;</h1>
						<h1><?php echo $countPor['count']; ?>+</h1>
					</div>
				</div>
				<div class="form-control col">
					<h4 class="row px-3">Nombre des commandes</h4>
					<div class="row px-3">
						<h1>&#9815;</h1>
						<h1><?php echo $countCom['count']; ?>+</h1>
					</div>
				</div>
				<div class="form-control col">
					<h4 class="row px-3">Nombre des clients</h4>
					<div class="row px-3">
						<h1>&#9812;</h1>
						<h1><?php echo $countCli['count']; ?>+</h1>
					</div>
				</div>
			</div>
			<div class="row mt-3">
				<table class="table">
					<tr>
						<th class="text-muted">Liens important pour gerer le site</th>
					</tr>
					<tr>
						<td><a href="/quemada/">&#9755; Page d'accueil Quemada</a></td>
					</tr>
					<tr>
						<td><a href="/quemada/boutique.php">&#9755; Page boutique</a></td>
					</tr>
					<tr>
						<td><a href="/quemada/about.php">&#9755; Page a propos</a></td>
					</tr>
					<tr>
						<td><a href="/quemada/contact.php">&#9755; Page de contact</a></td>
					</tr>
					
				</table>
			</div>
		</section>
	</div>
</body>
</html>