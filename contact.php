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
		<section class="container">
          
               <div class="row spacer"></div>
               <div class="row">
                    <div class="form-group col-6">
					<h2 class="row">Envoyer nous un message!</h2>
					<input class="form-control h-20 m-2" required type="text" placeholder="Nom" class="row inputStyle">					
					<input class="form-control h-20 m-2" required type="text" placeholder="Prenom" class="row inputStyle">					

					<input class="form-control h-20 m-2" required type="email" placeholder="Adresse electronique" class="row inputStyle">					
					<textarea class="form-control h-20 m-2" placeholder="message" class="row inputStye"></textarea>
					<input type="submit" value="Envoyer" class="btn btn-primary m-2" >
				</div>
				<div class="col-6">
					<h4>Adresse</h4>
					<h6>Rue 253, Zougour</h6>
					<h6>Dakar, Senegal</h6>
					<br/>
					<h4>Contact</h4>
					<h6>+221 77 865 21 48</h6>
					<h6>contact@quemada.com</h6>
					<h6>www.quemada.com</h6>
					<br/>
					<h4>Reseaux sociaux</h4>
					<h6>Instagram : quemada_io</h6>
					<h6>linkedIn : Quemada</h6>
					<h6>Facebook : Quemada IO</h6>
					<br/>
					
				</div>
				
               </div>
               
               <div class="row spacer"></div>

          </section>
		<?php
			include("./components/footer.php")
		?>
	</div>
</body>
</html>