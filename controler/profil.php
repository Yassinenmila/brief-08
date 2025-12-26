
<?php 

$arr= new Book ($db->conn);

$user_id = $_SESSION['user']['id'];

$books=$arr->profil($user_id);

?>
<?php require_once __DIR__."/../views/profil.views.php"; ?>