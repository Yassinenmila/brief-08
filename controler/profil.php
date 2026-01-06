
<?php 

$arr= new Book ($db->conn);

$user_id = $_SESSION['user']['id'];

$books=$arr->profil($user_id);

if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['return'])){

    $book_id=$_POST['book_id'];
    $user_id=$_SESSION['user']['id'];

    $tab= new Reader($db->conn);

    $unbo= $tab->unborrow($user_id,$book_id);
    
    if($unbo){
         echo "book unborrowed !!";
         header("Location:/profil");
         exit;
    }else {
        echo "there is a problem !!!";
    }

}

?>
<?php require_once __DIR__."/../views/profil.views.php"; ?>