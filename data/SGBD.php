<?php 

class Database {
    
    private $host = "db";               
    private $user = "user";             
    private $pass = "userpassword";     
    private $db   = "mon_projet_db";    

    public $conn;

    public function __construct() {
        try {
            $this->conn = new PDO(
                "mysql:host=".$this->host.";dbname=".$this->db,
                $this->user,
                $this->pass
            );
        } catch (PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        } 
    }
}

 $db= new Database();


