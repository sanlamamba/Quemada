<?php
     include_once("".$_SERVER['DOCUMENT_ROOT']."/quemada/backend/config/Database.php");

     class Commande
     {
          public function __construct()
          {
               $this->db = new Database();               
          }

          // SELECT
          public function read_commande()
          {    
               $query = "SELECT * from commande left join client on commande.id_client_commande = client.id_client ";
               $result = $this->db->select($query);
               return $result;
          }
          public function count_commande()
          {    
               $query = "SELECT count(*) as count from commande";
               $result = $this->db->select($query);
               foreach ($result as $data) {
                    return $data;
               }
          }
          public function read_commande_status($status)
          {
               
               $query = "SELECT * FROM commande LEFT JOIN client ON commande.id_client_commande = client.id_client WHERE commande.status_commande = '$status'";
               $result = $this->db->select($query);
               return $result;
          }
          public function read_commande_by_cart($cart)
          {
               
               $query = "SELECT * FROM commande LEFT JOIN client ON commande.id_client_commande = client.id_client WHERE commande.cart_id_commande='$cart' LIMIT 1";
               $result = $this->db->select($query);
               return $result;
          }
          public function read_commande_by_id($id)
          {
               
               $query = "SELECT * FROM commande LEFT JOIN client ON commande.id_client_commande = client.id_client WHERE commande.id='$id' LIMIT 1";
               $result = $this->db->select($query);
               return $result;
          }
          
          public function read_commande_by_client($client)
          {
               
               $query = "SELECT * FROM commande LEFT JOIN client ON commande.id_client_commande = client.id_client WHERE commande.id_client_commande='$client'";
               $result = $this->db->select($query);
               return $result;
          }
          



          // CREATE
          public function create_commande($id_client,$cart_id,$total)
          {    
               $query = "INSERT INTO `commande` (`id`, `id_client_commande`, `date_commande`, `status_commande`, `cart_id_commande`, `total`) VALUES (NULL, '$id_client', current_timestamp(), 'attente', '$cart_id', '$total'); ";
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
          public function delete_produit($id)
          {    
               //CHANGE QUERY
               $query = "DELETE FROM `produits` WHERE `produits`.`id` = $id";
               $result = $this->db->delete($query);
               if ($result) {
                    $msg = "<span class='success'>Succes</span>";
                    return $msg;
               } else {
                    $msg = "<span class='error'>Echec</span>";
                    return $msg;
               }
          }
          public function finir_commande($id)
          {    
               //CHANGE QUERY
               $query = "UPDATE `commande` SET `status_commande` = 'fini' WHERE `commande`.`id` = '$id'";
               $result = $this->db->update($query);
               
          }
          public function rejeter_commande($id)
          {    
               //CHANGE QUERY
               $query = "UPDATE `commande` SET `status_commande` = 'rejeter' WHERE `commande`.`id` = '$id'";
               $result = $this->db->update($query);
               
          }
          
          
     }