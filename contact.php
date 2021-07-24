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
                    <div class="col-6">
					<h2 class="row">Envoyer nous un message!</h2>
					<input type="text" placeholder="Adresse electronique" class="row inputStyle">					
					<textarea placeholder="message" class="row inputStye"></textarea>
					<button class="btn btn-primary">Envoyer</button>
				</div>
				<div class="col-6">
					<h4>Adresse</h4>
					<h6>Lorem ipsum dolor sit amet consectetur adipisicing elit</h6>
					<br/>
					<h4>Contact</h4>
					<h6>+221 77 865 21 48</h6>
					<h6>contact@quemada.com</h6>
					<h6>www.quemada.com</h6>
					<br/>
					<h4>Reseaux sociaux</h4>
					<h6>+221 77 865 21 48</h6>
					<h6>contact@quemada.com</h6>
					<h6>www.quemada.com</h6>
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