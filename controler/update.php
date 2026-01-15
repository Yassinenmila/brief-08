<?php 

$id=$_POST['id'];

$b=new Admin($db->conn);
$book=$b->find($id);

if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['sub_mod'])){
    $id=$_POST['id'];
    $titre= $_POST['titre'] ?? '';
    $author_name= $_POST['author_name'] ?? '';
    $date_pub= $_POST['date_pub'] ?? '';
    $text= $_POST['descr'] ?? '';

    $b->update($id,$titre,$author_name,$date_pub,$text);
    header("Location:/admin");
    exit;
}
?>