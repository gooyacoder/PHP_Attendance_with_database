
<?php 

  $title = "Index";
  require_once 'includes/header.php';
  require_once 'db/conn.php';

?>

    <h1 class="text-center">Registeration for IT Conference</h1>

    <form method="POST" action="success.php">

		<div class="form-group">
			<label for="firstname">First Name</label>
			<input type="text" class="form-control" id="firstname" name="firstname">
		</div>
		<div class="form-group">
			<label for="lastname">Last Name</label>
			<input type="text" class="form-control" id="lastname" name="lastname">
		</div>
		<div class="form-group">
			<label for="dob">Date of Birth</label>
			<input type="text" class="form-control" id="dateofbirth" name="dateofbirth">
		</div>
		<div class="form-group">
			<label for="specialty">Area of Expertise</label>
			<select class="form-control" id="specialty_id" name="specialty_id">
		      <option value="1">Database Administrator</option>
		      <option value="2">Software Developer</option>
		      <option value="3">Web Administrator</option>
		      <option value="4">Other</option>
		    </select>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="emailaddress">
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>
		<div class="form-group">
			<label for="number">Contact Number</label>
			<input type="text" class="form-control" id="phone" name="phone">
			<small id="numberhelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
		</div>
	  
	  <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
	</form>


<?php 

  require_once 'includes/footer.php';
?>