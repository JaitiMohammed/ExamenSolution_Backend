<?php
	

	class Examen {

		private $conn;
		private $table ='Examen';

		// proprties
		private $id;
		private $session;
		private $date_examen;
		private $duree_examen;
		private $sujet_examen;
		private $filiere;
		private $cycle;
		private $numero_groupe;
		private $semestre;



		public function __construct($db){
			$this->conn=$db;
		}

		public function examenById(){

		}
		public function create_examen(){

		}

		public function delete_examen(){

		}

		public function update_examen(){
			
		}

	}

?>