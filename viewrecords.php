<?php 

  $title = "View Attendees";
  require_once 'includes/header.php';
  require_once 'db/conn.php';

  $results = $crud->getAttendees();

?>


<table class="table">
	
	<tr>
		<th>#</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Date of Birth</th>
		<th>Email Address</th>
		<th>Phone Number</th>
		<th>Specialty</th>
	</tr>
	<?php 
		while($r = $results->fetch(PDO::FETCH_ASSOC)){
			echo "<tr>";
			echo "<td>" . $r['attendee_id'] . "</td>";
			echo "<td>" . $r['firstname'] . "</td>";
			echo "<td>" . $r['lastname'] . "</td>";
			echo "<td>" . $r['dateofbirth'] . "</td>";
			echo "<td>" . $r['emailaddress'] . "</td>";
			echo "<td>" . $r['phone'] . "</td>";
			echo "<td>";
			switch($r['specialty_id']){
                case '1':
                echo 'Database Administrator';
                break;
                case '2':
                echo 'Software Developer';
                break;
                case '3':
                echo 'Web Administrator';
                break;
                default:
                echo 'Other';
                break;
            }
			echo "</td>";
			echo "</tr>";
		}
	?>

</table>








<?php 

  require_once 'includes/footer.php';
?>