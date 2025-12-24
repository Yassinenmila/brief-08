<?php 

class Admin extends User {

    public function __construct($conn){
        parent::__construct($conn);
    }

    public function ajouter($titre,$author,$date_pub,$desc,$dispo){

        $stmt=$this->conn->prepare("INSERT INTO book (titre,author_name,date_pub,descr,dispo) VALUES (?,?,?,?,?)");
        $stmt->execute([$titre,$author,$date_pub,$desc,$dispo]);

        return $this->conn->lastInsertId();

    }

    public function update($id,$titre,$dispo){
        $stmt= $this->conn->prepare("UPDATE book SET titre=?,dispo=? WHERE id=?");
        return $stmt->execute([$titre,$dispo,$id]);
    }

    public function delete($book_id,$dispo=1){
        
        

        $stmt=$this->conn->prepare("DELETE FROM book WHERE id = ? AND dispo=?");
        return $stmt->execute([$book_id,$dispo]);
    }
}
?>