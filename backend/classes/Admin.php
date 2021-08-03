<?php
     include_once("".$_SERVER['DOCUMENT_ROOT']."/quemada/backend/config/Database.php");

     class Admin
     {
          public function __construct()
          {
               $this->db = new Database();               
          }

          // SELECT
          public function read_administrateur()
          {    
               $query = "select * from administrateur";
               $result = $this->db->select($query);
               return $result;
          }

          public function read_administrateur_id($id)
          {    
               $query = "select * from administrateur where id = '$id'";
               $result = $this->db->select($query);
               foreach ($result as $data) {
                    return $data;
               }
          }
          public function read_administrateur_mail($mail)
          {    
               $query = "select * from administrateur where mail = '$mail'";
               $result = $this->db->select($query);
               foreach ($result as $data) {
                    return $data;
               }
          }
          
          
          public function authenticate($mail,$password)
          {
               
               $query = "select * from administrateur where mail = '$mail' and mdp  = '$password'";
               $result = $this->db->select($query);
               if(!is_iterable($result)){
                    return false;
               }
               foreach ($result as $data) {
                    return $data;
               }
               
          }



          // CREATE
          public function create_administrateur($data)
          {    
               $nom = $data['nom'];
               $prenom = $data['prenom'];
               $mail = $data['mail'];
               $adresse = $data['adresse'];
               $mdp = $data['mdp'];
              

               $query = "INSERT INTO `administrateur` (`id_administrateur`, `nom_administrateur`, `prenom_administrateur`, `adresse_administrateur`, `mail_administrateur`, `mdp_administrateur`, `token`, `session`) VALUES (NULL, '$nom', '$prenom', '$adresse', '$mail', '$mdp', NULL, current_timestamp());";
               $result = $this->db->insert($query);
               if ($result) {
                    return $this->authenticate($mail,$mdp);
               } else {
                    $msg = "<span class='error'>Echec</span>";
                    return $msg;
               }
          }


          
          
     }