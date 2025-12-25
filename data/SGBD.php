<?php 

class database {

    private $host= "localhost";
    private $root="yassine";
    private $pass="Yassine34.";
    private $db_name="bibliotheque";

    public function __construct(){
        try{
            $conn= new PDO (
                "mysql:host=".$this->host.";dbname=".$this->db_name,
                $this->root,
                $this->pass
            );
            return $conn;
        }
        catch (PDOExeption $e) {
            echo "erreur de connection !!!";
            return null;
        } 
    }
}

$db= new database();

?>