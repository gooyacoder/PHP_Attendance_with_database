
<?php 

  $title = "Edit Record";
  require_once 'includes/header.php';
  require_once 'db/conn.php';

  $result = $crud->getSpecialties();

  if(!isset($_GET['id'])){
  	echo "<h1 class='text-danger'>Error!</h1>";
  }else{
  	$id = $_GET['id'];
  	$attendee = $crud->getAttendee($id);
  

?>

    <h1 class="text-center">Edit Record</h1>

    <form method="POST" action="editpost.php">
    	<input type="hidden" name="id" value="<?php echo $attendee['attendee_id']; ?>" />

		<div class="form-group">
			<label for="firstname">First Name</label>
			<input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $attendee['firstname']; ?>">
		</div>
		<div class="form-group">
			<label for="lastname">Last Name</label>
			<input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $attendee['lastname']; ?>">
		</div>
		<div class="form-group">
			<label for="dob">Date of Birth</label>
			<input type="text" class="form-control" id="dateofbirth" name="dateofbirth" value="<?php echo $attendee['dateofbirth']; ?>">
		</div>
		<div class="form-group">
			<label for="specialty">Area of Expertise</label>
			<select class="form-control" id="specialty_id" name="specialty_id" value="<?php echo $attendee['name']; ?>">
		      <?php 
		      		while($r = $result->fetch(PDO::FETCH_ASSOC)){
		      			if($r['name'] == $attendee['name']){
		      				echo '<option value=' . $r['specialty_id'] . ' selected>' . $r['name'] . '</option>';
		      			}else{
		      				echo '<option value=' . $r['specialty_id'] . '>' . $r['name'] . '</option>';
		      			}
		      			
		      		}
		      ?>
		    </select>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="emailaddress" value="<?php echo $attendee['emailaddress']; ?>">
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>
		<div class="form-group">
			<label for="number">Contact Number</label>
			<input type="text" class="form-control" id="phone" name="phone" value="<?php echo $attendee['phone']; ?>">
			<small id="numberhelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
		</div>
	  
	  <button type="submit" name="submit" class="btn btn-success btn-block">Save</button>
	</form>


<?php }?>

<?php 

  require_once 'includes/footer.php';
?>