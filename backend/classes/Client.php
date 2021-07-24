<?php
     include_once("".$_SERVER['DOCUMENT_ROOT']."/quemada/backend/config/Database.php");

     class Client
     {
          public function __construct()
          {
               $this->db = new Database();               
          }

          // SELECT
          public function read_clients()
          {    
               $query = "select * from client";
               $result = $this->db->select($query);
               return $result;
          }

          public function read_client_id($id)
          {    
               $query = "select * from client where id_client = $id";
               $result = $this->db->select($query);
               foreach ($result as $data) {
                    return $data;
               }
          }
          public function read_client_mail($mail)
          {    
               $query = "select * from client where mail_client = $mail";
               $result = $this->db->select($query);
               foreach ($result as $data) {
                    return $data;
               }
          }
          
          
          public function authenticate($mail,$password)
          {
               
               $query = "select * from client where mail_client = '$mail' and mdp_client = '$password'";
               $result = $this->db->select($query);
               foreach ($result as $data) {
                    return $data;
               }
               
          }



          // CREATE
          public function create_client($data)
          {    
               $nom = $data['nom'];
               $prenom = $data['prenom'];
               $mail = $data['mail'];
               $adresse = $data['adresse'];
               $mdp = $data['mdp'];
              

               $query = "INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `adresse_client`, `mail_client`, `mdp_client`, `token`, `session`) VALUES (NULL, '$nom', '$prenom', '$adresse', '$mail', '$mdp', NULL, current_timestamp());";
               $result = $this->db->insert($query);
               if ($result) {
                    return $this->authenticate($mail,$mdp);
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
          
     }