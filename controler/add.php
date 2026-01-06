<?php 

if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['sub_add'])){
    $titre= $_POST['titre'] ?? '';
    $author_name= $_POST['author_name'] ?? '';
    $date_pub= $_POST['date_pub'] ?? '';
    $text= $_POST['descr'] ?? '';

    $add=new Admin($db->conn);
    $add->ajouter($titre,$author_name,$date_pub,$text);
    header("Location:/admin");
    exit;
}

?>
<?php require_once __DIR__."/../views/add.views.php"?>