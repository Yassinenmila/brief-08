<?php 

class database {

    private $host= "localhost";
    private $root="yassine";
    private $pass="Yassine34.";
    private $db_name="bibliotheque";

    public function connect (){
        $conn= mysqli_connect(
            $this->host,
            $this->root,
            $this->pass,
            $this->db_name
        );
        if(!$conn){
            die("erreur de connection: ");
        }
        return $conn;
    }

}
$db= new database();
$conn=$db->connect();
?>