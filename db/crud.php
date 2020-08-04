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

		public function getAttendees(){
			$sql = "SELECT * FROM attendee a inner join specialties s on a.specialty_id = s.specialty_id";
			$result = $this->db->query($sql);
			return $result;
		}

		public function getAttendee($id){
			$sql = "SELECT * FROM attendee a inner join specialties s on a.specialty_id = s.specialty_id WHERE attendee_id = :id";
			$statement = $this->db->prepare($sql);
			$statement->bindparam(':id', $id);
			$statement->execute();
			$result = $statement->fetch();
			return $result;
		}

		public function getSpecialties(){
			$sql = "SELECT * FROM specialties";
			$result = $this->db->query($sql);
			return $result;
		}
	}


?>