<?php

	class Professeur {

		private $table = 'Professeur';
		private $conn;

		// proprities
		public $id;
		public $nom;
		public $prenom;
		public $email;
		public $profession;
		public $universite;
		public $etablissement;
		public $tel;
		public $password;



		public function create_professeur(){
			$query = " INSERT INTO 
							'.$this->table .
							'SET 
								nom = :nom , 
								prenom = :prenom , 
								email = :email ,
								profession = :profession ,
								universite = :universite ,
								etablissement = :etablissement ,
								tel = :tel ,
								password = :password";
			// clear date

			$this->nom = htmlspecialchars(strip_tags($this->nom));
			$this->prenom = htmlspecialchars(strip_tags($this->prenom));
			$this->profession = htmlspecialchars(strip_tags($this->profession));
			$this->universite = htmlspecialchars(strip_tags($this->universite));
			$this->etablissement = htmlspecialchars(strip_tags($this->etablissement));
			$this->tel = htmlspecialchars(strip_tags($this->tel));
			$this->password = htmlspecialchars(strip_tags($this->password));

			
			$stmt = $this->conn->prepare($query);
			$stmt-> bindParam(':nom', $this->nom);
			$stmt-> bindParam(':prenom', $this->prenom);
			$stmt-> bindParam(':profession', $this->profession);
			$stmt-> bindParam(':universite', $this->universite);
			$stmt-> bindParam(':etablissement', $this->etablissement);
			$stmt-> bindParam(':tel', $this->tel);
			$stmt-> bindParam(':password', $this->password);

			// Execute query
			  if($stmt->execute()) {
			    return true;
			  }
  			printf("Error: $s.\n", $stmt->error);

  			return false;

		}


	}

?>