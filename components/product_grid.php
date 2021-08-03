<?php
     require_once("./backend/instances/instances.php");
     $data =$produit->read_produits();
     if(isset($_GET['filtre'])){
          $data=$produit->read_produits_categorie($_GET["filtre"]);
     }
     if(!is_iterable($data)){
          $data = array();
     }
?>
          <div class="row" id="productGrid">

<?php    

     foreach ($data as $data) {?>

               <a href="produit.php?product_num=<?php echo$data["id"] ?>" class="produit col-sm-6 col-md-3">
                    <div class="row hoverImgCont">
                         <img height="200px" src="./images/produit/<?php echo $data['label']?>/<?php echo $data['img_produit']?>" alt="product">
                    </div>
                    <div class="row productProperty">
                         <h5 class="col-12 productTitle"><?php echo $data['nom_produit'] ?></h5>
                         <h6 class="col-12 productPrice"><span class="row"><?php echo $data['prix']?></span></h6>
                    </div> 
               </a>
     <?php
     }
     ?>
               </div>

<script>
     
</script>