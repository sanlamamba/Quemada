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
				<h3>Liste des clients</h3>
				<div class="col-12">
					<div class="row">
						<table class="col-12">
							<tr class="row">
								<th class="col-1">ID</th>
								<th class="col-3">Nom Client</th>
								<th class="col">adresse</th>
								<th class="col">mail</th>
								<th class="col-2">Supprimer</th>
							</tr>

							<!-- LOOP HERE -->
							<tr class="row">
								<td class="col-1">ID</td>
								<td class="col-3">Paul Jean pierrre</td>
								<td class="col">Liberte, Dakar</td>
								<td class="col">juggernaut@gmail.com</td>
								<td class="col-2">
									<a href="#" class="row">
										<button class="col-8 btn btn-light">O</button>
									</a>
								</td>
								
								
							</tr>
							<!-- END LOOP -->
						</table>
					
					</div>
				</div>
			</form>
		</section>
	</div>
</body>
</html>