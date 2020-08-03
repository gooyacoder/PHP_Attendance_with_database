<?php 


	class crud{
		private $db;

		function __construct($conn){
			$this->db = $conn;
		}

		public function insert($firstname, $lastname, $dateofbirth, $emailaddress, $phone, $specialty_id){
			try{

				$sql = 'INSERT INTO attendee (firstname,lastname,dateofbirth,emailaddress,phone,specialty_id) VALUES (:firstname,:lastname,:dateofbirth,:emailaddress,:phone,:specialty_id)';
				$statement = $this->db->prepare($sql);
				$statement->bindparam(':firstname', $firstname);
				$statement->bindparam(':lastname', $lastname);
				$statement->bindparam(':dateofbirth', $dateofbirth);
				$statement->bindparam(':emailaddress', $emailaddress);
				$statement->bindparam(':phone', $phone);
				$statement->bindparam(':specialty_id', $specialty_id);
				$statement->execute();
				return true;

			}catch(PDOException $e){
				echo $e->getMessage();
				return false;
			}
		}
	}


?>