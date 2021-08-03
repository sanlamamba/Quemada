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
          public function count_clients()
          {    
               $query = "SELECT count(*) as count from client";
               $result = $this->db->select($query);
               foreach ($result as $data) {
                    return $data;
               }
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
               if(!is_iterable($result)){
                    return false;
               }
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
          
          

          // DELETE
          public function delete_client($id)
          {    
               //CHANGE QUERY
               $query = "DELETE FROM `client` WHERE `client`.`id_client` = $id";
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