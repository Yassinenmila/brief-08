<?php 

class Reader extends User {


    public function __construct($conn){
        parent::__construct($conn);
    }

    public function borrow($user_id,$book_id){
        
        $stmt=$this->conn->prepare("SELECT dispo FROM book WHERE id=?");
        $stmt->execute([$book_id]);

        $book=$stmt->fetch(PDO::FETCH_ASSOC);

        if(!$book || $book['dispo']==0){
            return false;
        }

        $stmt=$this->conn->prepare("INSERT INTO borrow (user_id,book_id) VALUES (?,?)");
        $stmt->execute([$user_id,$book_id]);

        $stmt=$this->conn->prepare("UPDATE book SET dispo=0 WHERE id = ?");
        $stmt->execute([$book_id]);

        return true;
    }
}
?>