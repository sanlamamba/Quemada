<?php
     include_once("".$_SERVER['DOCUMENT_ROOT']."/quemada/backend/config/Database.php");

     class Produit
     {
          public function __construct()
          {
               $this->db = new Database();               
          }

          // SELECT
          public function read_produits()
          {    
               $query = "select * from produits left join categorie on produits.categorie = categorie.id_categorie";
               $result = $this->db->select($query);
               return $result;
          }
          public function read_produits_limit($count)
          {    
               $query = "select * from produits left join categorie on produits.categorie = categorie.id_categorie LIMIT $count";
               $result = $this->db->select($query);
               return $result;
          }
          
          public function read_produits_id($id)
          {
               
               $query = "select * from produits left join categorie on produits.categorie = categorie.id_categorie WHERE produits.id = $id";
               $result = $this->db->select($query);
               return $result;
          }



          // CREATE
          public function create_produit($data,$file)
          {    
               //CHANGE QUERY
               $nom = $data['nom'];
               $prix = $data['prix'];
               $desc = $data['desc'];
               // $img = $data['img'];
               $cat = $data['cat'];
               $cate ='autre';
               if($cat ==1){
                    $cate = 'ordinateur';
               }elseif($cat ==2){
                    $cate = 'telephone';
               }
               $tag = 'produit';

               $file_name = $file['img']['name'];
               $file_temp = $file['img']['tmp_name'];

               $div = explode('.', $file_name);
               $file_ext = strtolower(end($div));
               $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
               $uploaded_image = "".$_SERVER['DOCUMENT_ROOT']."/quemada/images/produit/$cate/$unique_image";
       
               move_uploaded_file($file_temp, $uploaded_image);
               $query = "INSERT INTO `produits` (`id`, `nom_produit`, `prix`, `description`, `img_produit`, `categorie`, `tag`) VALUES (NULL, '$nom', '$prix', '$desc', '$unique_image', '$cat', '$tag');";
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
          public function update_produit($id,$data,$old_cat)
          {    
               //CHANGE QUERY
               $nom = $data['nom'];
               $prix = $data['prix'];
               $desc = $data['desc'];
               $img = $data['img'];
               $cat = $data['cat'];
               if(strlen($old_cat)>0){
                    $cat = $old_cat;
               }
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