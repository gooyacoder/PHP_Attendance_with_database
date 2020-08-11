<?php 

  $title = "View Attendees";
  require_once 'includes/header.php';
  require_once 'includes/auth_check.php';
  require_once 'db/conn.php';

  $results = $crud->getAttendees();

?>


<table class="table">
	
	<tr>
		<th>#</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Specialty</th>
		<th>Actions</th>
	</tr>
	<?php 
		while($r = $results->fetch(PDO::FETCH_ASSOC)){
			echo "<tr>";
			echo "<td>" . $r['attendee_id'] . "</td>";
			echo "<td>" . $r['firstname'] . "</td>";
			echo "<td>" . $r['lastname'] . "</td>";
			echo "<td>" . $r['name'] . "</td>";
			echo "<td>";
			echo "<a class='btn btn-primary' href='view.php?id=". $r['attendee_id'] . "'>View</a>";
			echo " ";
			echo "<a class='btn btn-warning' href='edit.php?id=". $r['attendee_id'] . "'>Edit</a>";
			echo " ";
			echo "<a onClick='return confirm(\"Are you sure to delete this record?\");' class='btn btn-danger' href='delete.php?id=". $r['attendee_id'] . "'>Delete</a>";
			echo "</td>";
			echo "</tr>";
		}
	?>

</table>








<?php 

  require_once 'includes/footer.php';
?>