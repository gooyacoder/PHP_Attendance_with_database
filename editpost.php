<?php
require_once 'db/conn.php';

  if(isset($_POST['submit'])){

  	$result = $crud->edit($_POST['id'],$_POST['firstname'],$_POST['lastname'],$_POST['dateofbirth'],$_POST['emailaddress'],$_POST['phone'],$_POST['specialty_id']);

  	if($result){

  		header("Location: viewrecords.php");

  	}else{
  		echo "Error";
  	}

  }else{
  		echo "Error";
  }


















?>