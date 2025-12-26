<?php 


class Book extends User{

    public function __construct($conn){
        parent::__construct($conn);
    }

    public function home($dispo){

        $stmt=$this->conn->prepare("SELECT * FROM book WHERE dispo=?");
        $stmt->execute([$dispo]);

        $books=$stmt->fetchAll(PDO::FETCH_ASSOC);

        if(empty($books)){
            echo "no books for the moment !!";
            return[];
        }else {
            return $books;
        }
    }
}
?>