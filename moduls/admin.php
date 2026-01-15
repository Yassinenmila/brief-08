<?php 

class Admin extends User {

    public function __construct($conn){
        parent::__construct($conn);
    }

    public function ajouter($titre,$author,$date_pub,$desc){

        $stmt=$this->conn->prepare("INSERT INTO book (titre,autor_name,date_publication,descr,dispo) VALUES (?,?,?,?,?)");
        $stmt->execute([$titre,$author,$date_pub,$desc,1]);
        return true;
    }

    public function update($id,$titre,$author,$date_pub,$desc){
        
        $stmt= $this->conn->prepare("UPDATE book SET titre=?,autor_name=?,date_publication=?,descr=? WHERE id=?");
        $stmt->execute([$titre,$author,$date_pub,$desc,$id]);
        return true;
    }
    public function find($id){
        $stmt=$this->conn->prepare("SELECT * FROM book WHERE id=?");
        $stmt->execute([$id]);
        $book=$stmt->fetch(PDO::FETCH_ASSOC);
        return $book;
    }

    public function delete($book_id){
        
        $stmt=$this->conn->prepare("SELECT * FROM book WHERE id=?");
        $stmt->execute([$book_id]);

        $b=$stmt->fetch(PDO::FETCH_ASSOC);
        if(empty($b)){
            return false ;
        }
        $stmt=$this->conn->prepare("DELETE FROM book WHERE id = ? AND dispo=?");
        $stmt->execute([$book_id,1]);
        return true;
    }
}
?>
