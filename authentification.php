<!DOCTYPE html>
<html lang="en">
<?php
	include("./components/head.php");

     if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['inscription'])) {
		$insertClient = $client->create_client($_POST);
          if($insertClient){
               $id = $insertClient['id_client'];
               $nom = $insertClient['nom_client'];
               $mail = $_POST['mail'];
               $mdp = $_POST['mdp'];
               session_start();
               $_SESSION['client']= $nom;
               $_SESSION['id']=$id;
               $_SESSION['nom'] = $nom;
               $_SESSION['mois'] =date("m");
               $_SESSION['panier'] =randStr();

               header('Location: /quemada');
          }else{
               
          }
          
	}
     if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['connection'])) {
		$authen = $client->authenticate($_POST['mail'],$_POST['mdp']);
          if($authen){
               $id = $authen['id_client'];
               $nom = $authen['nom_client'];
               $mail = $_POST['mail'];
               $mdp = $_POST['mdp'];
               session_start();
               $_SESSION['client']= $nom;
               $_SESSION['id']=$id;
               $_SESSION['nom'] = $nom;
               $_SESSION['mois'] =date("m");
               $_SESSION['panier'] =randStr();
               header('Location: /quemada');
          }else{
               echo "<script> alert('Erreur: mot de passe ou email incorrecte') </script>";
          }
          
          
	}
     
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
                    <?php
                         if(isset($_SESSION['client'])){?>
                              <div class="col-12 form-control">
                                   <h2 class="text-muted">Information Personnel</h2>

                                   <h2>Vous etes connecter sur le nom <?php echo $_SESSION["client"]?></h2>
                                   <h4> votre panier presentement est sous le numero <?php echo $_SESSION['panier']?></h4>
                                   <h6>Si vous avez des problemes, veuillez appeller le +221 33 698 54 87 </h6>
                                   <div class='col-12'>
                                        <a href="./deconnexion.php"> <button class="btn btn-danger">Deconnexion</button></a>

                                   </div>
                              </div>
                              
                              <div class="col-12 form-control">
                                   <h2 class="text-muted">Vos Commandes</h2>
                                   <table class="table col-12">
                                        <tr class="row">
                                             <th class="col-2">ID</th>
                                             <th class="col">montant</th>
                                             <th class="col">status</th>
                                             <th class="col-1"></th>
                                        </tr>
                                        <?php 
                                             $data = $commande->read_commande_by_client($_SESSION['id']);
                                             if(!is_iterable($data)){
                                                  $data = array();
                                             }
                                             foreach ($data as $datum) {?>
                                        <!-- LOOP HERE -->
                                        <tr class="row">
                                             <td class="col-2">quem<?php echo $datum['id'] ?></td>
                                             <td class="col"><?php echo $datum['total'] ?> FCFA</td>
                                             <td class="col"><?php echo $datum['status_commande'] ?></td>
                                             <td class="col-1">
                                                  <a href="./commande.php?commande=<?php echo $datum['id'] ?>" class="row">
                                                       &#128065;
                                                  </a>
                                             </td>
                                             
                                             
                                        </tr>
                                        <?php } ?>
                                   </table>
                              </div>
                              
                         <?php }else{

                         
                    ?>
                    <div class="col-xl-5 col-md-12 aboutImg">
                         <form action="" method="post" enctype="multipart/form-data" class='form-control row'>
                              <h2 class='col-12 t-align-center'> Connection</h2>
                              <div class='form-group col-12'>
                                   
                                   <h4>Adresse mail</h4>
                                   <input required placeholder="johndoe@mail.me" type="text" name="mail" id="mail" class='form-control'>
                              </div>
                              <div class='form-group col-12'>
                                   
                                   <h4>Mot de passe</h4>
                                   <input required placeholder="***********" type="password" name="mdp" id="mdp" class='form-control'>
                              </div>
                              <div class="col-12 form-group">
                                   <input class='col-4 btn btn-primary' type="submit" value="connection" id="connection" name="connection">
                              </div>
                         </form>
                    </div>    
                    <div class="col-xl-6 col-md-12">
                         <form action="" method="post" enctype="multipart/form-data" class='form-control row'>
                              <h2 class='col-12 t-align-center'>Inscription</h2>
                              <div style="display: grid; grid-template-columns:1fr 1fr" class='col-12'>
                                   <input required placeholder="Nom" type="text" name="nom" id="nom" class='col-12 form-control m-2'>
                                   <input required placeholder="Prenom" type="text" name="prenom" id="prenom" class='col-12 form-control m-2'>
                              </div>
                              <div class='form-group col-12'>
                                   <input required placeholder="Adresse mail" type="email" name="mail" id="mail" class='form-control m-2'>
                                   <input required placeholder="Adresse de livraison" type="text" name="adresse" id="adresse" class='form-control m-2'>
                                   <input required placeholder="Mot de passe" type="password" name="mdp" id="mdp" class='form-control m-2'>

                              </div>
                              
                              <div class="col-12 form-group">
                                   <input class='col-4 btn btn-primary' type="submit" value="inscription" id="inscription" name="inscription">
                              </div>
                         </form>
                    </div>
                         <?php } ?>
               </div>
               <div class="row spacer"></div>
               
                    
               <div class="row spacer"></div>

          </section>
		<?php
			include("./components/footer.php")
		?>
	</div>
</body>
</html>