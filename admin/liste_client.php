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
				<h2 class="text-muted">Liste des clients</h2>
				<div class="col-12">
					<div class="row">
						<table class="table col-12">
							<tr class="row">
								<th class="col-1">ID</th>
								<th class="col-3">Nom Client</th>
								<th class="col">adresse</th>
								<th class="col">mail</th>
								<th class="col-2"></th>
							</tr>
							<?php
								$data = $client->read_clients();
								foreach ($data as $datum) {?>
									
							<!-- LOOP HERE -->
							<tr class="row">
								<td class="col-1"><?php echo $datum['id_client'];?></td>
								<td class="col"><?php echo $datum['nom_client']; echo " "; echo $datum['prenom_client']; ?></td>
								<td class="col"><?php echo $datum['adresse_client'];?></td>
								<td class="col"><?php echo $datum['mail_client'];?></td>
								<td class="col-2">
									<a href="./update.php?delete_client=true&num=<?php echo $datum['id_client']?>" class="row">
										&#128465;
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