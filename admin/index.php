<!DOCTYPE html>
<html lang="en">
<?php
	include("./components/head.php")
?>
<body>
		<?php
			if(isset($_POST['connection'])){
				$authen = $admin->read_administrateur($_POST['mail'],$_POST['mdp']);
				
				foreach ($authen as $user) {
					session_start();
					$_SESSION['id'] = $user['id'];
					$_SESSION['pseudo'] = $user['pseudo'];
					header("Location:/quemada/admin/dashboard.php");
				}
			}
		?>
		<section class="container-fluid">
			<form action="" method="post" enctype="multipart/form-data" class='form-control col-5'>
				<h2>Connection Administrateur</h2>
				<p>Attention toutes attentive non autorise est susceptible d'acte de vandalisme</p>
				<p>Nous prendrons des actes judiciaire contre le concerne</p>
				<div class="form-group">
					<Label>Adresse Mail</Label>
					<input type="text" name="mail" id="mail" class="form-control p-2" required placeholder="johndoe@mail.me">
				</div>
				<div class="form-group">
					<Label>Mot de passe</Label>
					<input type="password" name="mdp" id="mdp" class="form-control p-2" required placeholder="****************">
				</div>
				<div class="form-group">
					<input type="submit" value="Connection" name="connection" class="btn btn-primary">
				</div>
				
				
			</form>
		</section>
</body>
</html>