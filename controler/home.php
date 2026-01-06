<?php 

$book= new Book($db->conn);

$books=$book->home(1);

if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['borrow'])){

    if(!isset($_SESSION['user'])){
        header("Location: /login");
        exit;
    }

    $user_id = $_SESSION['user']['id'];
    $book_id = $_POST['book_id'];

    $r=new Reader($db->conn);

    $bor=$r->borrow($user_id,$book_id);

    if($bor){
        echo "you have borrowed a book !!!";
        header("Location:/home");
        exit;
    }else {
        echo "error";
    }
   
}
?>
<?php require_once __DIR__."/../views/home.views.php"; ?>