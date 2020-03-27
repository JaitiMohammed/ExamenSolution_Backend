<? php

    class Etudiant {
        private $conn;
        private $table = "etudiant";


        // attributes

        public $id;
        public $nom;
        public $prenom;
        public $email;
        public $filiere;
        public $semestre;
        public $cycle;
        public $university;
        public $etablissement;
        public $tel;
        public $password;



        public function __construct($db){
            $this->conn = $db;
        }


        // create 
        public function create(){
            $query = 'INSERT INTO ' .$this->table .
                     'SET nom =:nom , prenom =:prenom , email =:email,
                     filiere = :filiere , semestre =:semestre ,
                     cycle =:cycle , university =: university ,
                     etablissement =:etablissement, tel =:tel , password=:password
                     '
            // prepare query
            $stmt = $this->conn->prepare($query);
            $this->nom = htmlspecialchars(strip_tags($this->nom));
            $this->prenom = htmlspecialchars(strip_tags($this->prenom));
            $this->email = htmlspecialchars(strip_tags($this->email));
            $this->filiere = htmlspecialchars(strip_tags($this->filiere));
            $this->semestre = htmlspecialchars(strip_tags($this->semestre));
            $this->cycle = htmlspecialchars(strip_tags($this->cycle));
            $this->etablissement = htmlspecialchars(strip_tags($this->etablissement));
            $this->tel = htmlspecialchars(strip_tags($this->tel));
            $this->password = htmlspecialchars(strip_tags($this->password));



            $stmt->bindParam(":nom",$this->nom);
            $stmt->bindParam(":prenom",$this->prenom);
            $stmt->bindParam(":email",$this->email);
            $stmt->bindParam(":filiere",$this->filiere);
            $stmt->bindParam(":semestre",$this->semestre);
            $stmt->bindParam(":cycle",$this->cycle);
            $stmt->bindParam(":etablissement",$this->etablissement);
            $stmt->bindParam(":tel",$this->tel);
            $stmt->bindParam(":password",$this->password);

            
            if($stmt->execute()){
                return true;
            }
            return false;
        }

        
        // read

        // delete 



    }


?>

