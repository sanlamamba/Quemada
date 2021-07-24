<?php
	include("./components/head.php");

     echo $_SESSION['nom'];
     session_unset();
     var_dump($_SESSION);
     session_destroy();
     header("Location:/quemada/authentification.php");