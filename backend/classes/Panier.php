<?php
     include_once("".$_SERVER['DOCUMENT_ROOT']."/quemada/backend/config/Database.php");

     class Panier
     {
          public function __construct()
          {
               $this->db = new Database();               
          }

          // SELECT
          public function read_cart($cart)
          {    
               $query = "SELECT quantite_produit_panier as quantite, produits.id as id_produit, prix as prix, panier.id as id, nom_produit as nom FROM panier LEFT JOIN produits ON panier.id_produit_panier=produits.id where cart_id ='$cart'";
               $result = $this->db->select($query);
               return $result;
          }
          public function read_produits_id($id)
          {
               
               $query = "select * from produits left join categorie on produits.categorie = categorie.id_categorie WHERE produits.id = $id";
               $result = $this->db->select($query);
               return $result;
          }
          public function read_cart_by_cart($cart)
          {
               
               $query = "SELECT panier.id_produit_panier as id , panier.quantite_produit_panier as quantite, produits.prix as prix, produits.id as id_produit, produits.nom_produit as nom FROM panier left join produits ON panier.id_produit_panier = produits.id where panier.cart_id = '$cart'";
               $result = $this->db->select($query);
               return $result;
          }



          // CREATE
          public function add_to_cart($data)
          {    
               //CHANGE QUERY
               $cart_id = $data['cart_id'];
               $id_prod = $data['id_prod'];
               $quantite = $data['quantite'];
               
               $query = "INSERT INTO `panier` (`id`, `cart_id`, `id_produit_panier`, `quantite_produit_panier`) VALUES (NULL, '$cart_id', '$id_prod', '$quantite');";
               $result = $this->db->insert($query);
               if ($result) {
                    $msg = "<span class='success'>Succes</span>";
                    return $msg;
               } else {
                    $msg = "<span class='error'>Echec</span>";
                    return $msg;
               }
          }

          // CREATE
          public function update_produit($id,$data,$file)
          {    
               //CHANGE QUERY
               $nom = $data['nom'];
               $prix = $data['prix'];
               $desc = $data['desc'];
               $img = $data['img'];
               $cat = $data['cat'];
               $tag = 'produit';
               $query = "UPDATE `produits` SET `nom_produit` = '$nom', `prix` = '$prix', `description` = '$desc', `img_produit` = '$img', `categorie` = '$cat', `tag` = '$tag' WHERE `produits`.`id` = $id; ";
               $result = $this->db->update($query);
               if ($result) {
                    $msg = "<span class='success'>Succes</span>";
                    return $msg;
               } else {
                    $msg = "<span class='error'>Echec</span>";
                    return $msg;
               }
          }
          

          // DELETE
          public function delete_cart($id)
          {    
               //CHANGE QUERY
               $query = "DELETE FROM `panier` WHERE `panier`.`id` = '$id'";
               $result = $this->db->delete($query);
               if ($result) {
                    return true;
               } else {
                    return false;
               }
          }
          
     }