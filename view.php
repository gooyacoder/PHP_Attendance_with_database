<?php 

  $title = "View Attendee";
  require_once 'includes/header.php';
  require_once 'includes/auth_check.php';
  require_once 'db/conn.php';

  if(!isset($_GET['id'])){
  	echo "<h1 class='text-danger'>Error</h1>";
  }
  else{
  	$id = $_GET['id'];
  	$result = $crud->getAttendee($id);
  	
 

?>


<div class="card" style="width: 18rem;">
	<div class="card-body">
	  <h5 class="card-title"><?php echo $result['firstname'] . ' ' . $result['lastname']; ?></h5>
	  <h6 class="card-subtitle mb-2 text-muted"><?php echo $result['name'];?></h6>
	  <hr>
	  <p class="card-text">
	      <span style="color: #888">Date of Birth : </span><?php echo $result['dateofbirth']; ?>
	  </p>
	  <p class="card-text">
	      <span style="color: #888">Email : </span><?php echo $result['emailaddress']; ?>
	  </p>
	  <p class="card-text">
	      <span style="color: #888">Contact Number : </span><?php echo $result['phone']; ?>
	  </p>
	  
	</div>
 </div>


<?php } ?>

<?php 

  require_once 'includes/footer.php';
?>