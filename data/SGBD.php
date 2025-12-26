<?php 

class database {

    private $host= "localhost";
    private $root="yassine";
    private $pass="Yassine34.";
    private $db_name="bibliotheque";

    public $conn;
    public function __construct(){
        try{
            $this->conn= new PDO (
                "mysql:host=".$this->host.";dbname=".$this->db_name,
                $this->root,
                $this->pass
            );
        }
        catch (PDOExeption $e) {
            echo "erreur de connection !!!";
        } 
    }
}

$db= new database();


?>