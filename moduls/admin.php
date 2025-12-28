<?php 

class Admin extends User {

    public function __construct($conn){
        parent::__construct($conn);
    }

    public function ajouter($titre,$author,$date_pub,$desc,$dispo){

        $stmt=$this->conn->prepare("INSERT INTO book (titre,author_name,date_pub,descr,dispo) VALUES (?,?,?,?,?)");
        $stmt->execute([$titre,$author,$date_pub,$desc,$dispo]);
        return true;
    }

    public function update($id,$titre,$dispo){
        $stmt= $this->conn->prepare("UPDATE book SET titre=?,dispo=? WHERE id=?");
        $stmt->execute([$titre,$dispo,$id]);
        return true;
    }

    public function delete($book_id){
        
        $stmt=$this->conn->prepare("SELECT * FROM book WHERE id=?");
        $stmt->execute([$book_id]);

        $b=$stmt->fetch(PDO::FETCH_ASSOC);
        if(empty($b)){
            return false ;
        }
        $stmt=$this->conn->prepare("DELETE FROM book WHERE id = ? AND dispo=?");
        $stmt->execute([$book_id,$dispo]);
        return true;
    }
}
?>
