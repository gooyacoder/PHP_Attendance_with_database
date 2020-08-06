<?php
	require_once 'db/conn.php';

	if(!isset($_GET['id'])){

		echo 'Error!';

	}else{

		$id = $_GET['id'];

		$result = $crud->delete($id);

		if($result){

			header("Location: viewrecords.php");

		}
		else{

			echo "Error!";

		}

	}




?>