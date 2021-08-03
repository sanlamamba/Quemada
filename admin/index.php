<!DOCTYPE html>
<html lang="en">
<?php
	include("./components/head.php")
?>
<body>
		<?php
			if(isset($_POST['connection'])){
				$authen = $admin->authenticate($_POST['mail'],$_POST['mdp']);
				
				if($authen){
					$id = $authen['id'];
					$nom = $authen['nom'];
					$pseudo = $authen['pseudo'];
					$mail = $_POST['mail'];
					session_start();
					$_SESSION['id']=$id;
					$_SESSION['nom'] = $nom;
					$_SESSION['pseudo'] = $pseudo;
					header('Location: /quemada/admin/dashboard.php');
				}else{
					echo "<script> alert('Erreur: mot de passe ou email incorrecte') </script>";
				}
			}
		?>
		<section class="container-fluid">
			<form action="" method="post" enctype="multipart/form-data" class='form-control m-5 col-5'>
				<h2>Connection Administrateur</h2>
				<p>Attention toutes attentive non autorise est susceptible d'acte de vandalisme</p>
				<p>Nous prendrons des actes judiciaire contre le concerne</p>
				<div class="form-group">
					<Label>Adresse Mail</Label>
					<input type="email" name="mail" id="mail" class="form-control p-2" required placeholder="johndoe@mail.me">
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