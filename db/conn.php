<?php

	//Development Database
	$host = 'localhost';
	$db = 'attendance_db';
	$user = 'root';
	$password = 'ahm';
	$charset = 'utf8mb4';
	$dsn = "mysql:host=$host;dbname=$db;charset=$charset";


	//Production Database
	/*$host = 'sql308.epizy.com';
	$db = 'epiz_26456153_a01';
	$user = 'epiz_26456153';
	$password = 'VFMblmGA45Boy';
	$charset = 'utf8mb4';
	$dsn = "mysql:host=$host;dbname=$db;charset=$charset";*/

	try{

		$pdo = new PDO($dsn, $user, $password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	}catch(PDOException $e){
		throw new PDOException($e->getMessage());
	}

	require_once 'crud.php';

	require_once 'user.php';

	$crud = new crud($pdo);

	$user = new user($pdo);

	$user->insertUser("admin", "password");

 ?>