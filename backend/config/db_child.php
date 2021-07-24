<?php
     class DB_child{
          public function __construct()
          {
               require("".$_SERVER['DOCUMENT_ROOT']."/quemada/backend/instances/db.php");

               $this->connection = $connection;
          }
     }