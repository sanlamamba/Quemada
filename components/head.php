<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quemada : Online Electronics Store </title>

	<link rel="stylesheet" href="./css/bootstrap-grid.css">
	<link rel="stylesheet" href="./css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" href="./css/bootstrap.min.css">

	<link rel="stylesheet" href="./style/main.css">

</head>
<?php
	session_start();

	require_once("".$_SERVER['DOCUMENT_ROOT']."/quemada/backend/instances/instances.php");
	$client_id = null;
	$client_name = null;
	function randStr(){
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$result = '';
		for($i=0;$i<10;$i++){
			$result .= $characters[rand(0, strlen($characters)-1)];

		}
		return $result;
	}
	
	