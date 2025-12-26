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

    public function profil($user_id){
        $stmt=$this->conn->prepare("SELECT book_id FROM borrow WHERE user_id=?");
        $stmt->execute([$user_id]);

        $b_id=$stmt->fetchAll(PDO::FETCH_ASSOC);

        if(!empty($b_id)){
            $books=[];
            foreach($b_id as $row){
                $id=$row['book_id'];
                $stmt=$this->conn->prepare("SELECT * FROM book WHERE id=?");
                $stmt->execute([$id]);
                $book=$stmt->fetch(PDO::FETCH_ASSOC);
                if($book){
                    array_push($books,$book);
                }
                else{
                    echo 'error';
                }
            }
            return $books;
        }else {
            return [] ;
        }
    }
}
?>