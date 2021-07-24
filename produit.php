<!DOCTYPE html>
<html lang="en">
<?php
	include("./components/head.php");

     

     // ADDING TO CART
     // $lki = isset($_POST["panier_btn"]);
     if(isset($_POST["panier_btn"])){
          // CODE PANIER
          $ajouterPanier = $panier->add_to_cart($_POST);
          header("Location:panier.php");
     }
     
?>
<?php
     $product_num = null;
     if(isset($_GET["product_num"])){
          $product_num= $_GET['product_num'];
     }else{
          $product_num=$_POST['id_prod'];
     }
     require_once("./backend/instances/instances.php");
     $data =$produit->read_produits_id($product_num);
     
     ?>
     <?php    
          foreach ($data as $data) ?>

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
                    
                    <div id="imgCont" class="col-sm-10 col-md-5">
                         <img src="./images/produit/<?php echo $data['label']?>/<?php echo $data['img_produit']?>" width="100%"/>
                    </div>
                    <div id="descriptionCont" class="col-sm-10 col-md-5 p-3">
                         
                         <h2 class="row" id="productTitle">
                              <?php echo $data['nom_produit'] ?>
                         </h2>
                         <h4 class="row" id="productPrice">
                              <?php echo $data['prix'] ?>
                         </h4>
                         <p id="productDescription" class="row">
                              <?php echo $data['description'] ?>
                         </p>
                         <form action="" method="post" enctype="multipart/form-data" id="utilities" class="row">
                              <label class="col-3">Categorie :</label>
                                   <p class="col-9">produit, <?php echo $data['label'] ?></p>
                              <label class="col-3">ID :</label>
                              <h5 class="col-9"><?php echo $data['id'] ?></h5>
                              <label class="col-6">Nombre a ajouter :</label>
                              <input name="quantite" type="number" require value="1" class="col-6"></input>
                              <input name="id_prod" type="text" value="<?php echo $data["id"]?>" required class="col-12 idProd" />
                              <input name="cart_id" type="text" value="<?php echo $_SESSION["panier"]?>" required class="col-12 idProd" />
                              <input name="panier_btn" type="submit" value="Ajouter au panier" class='col--8 btn btn-primary'>
                         </form>
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