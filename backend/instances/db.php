<?php

     require("".$_SERVER['DOCUMENT_ROOT']."/quemada/backend/config/config.php");
     require("".$_SERVER['DOCUMENT_ROOT']."/quemada/backend/config/connection.php");

     $connection = new DB($host,$username, $password,$db_name);
     // $connection = $db->getConnection();