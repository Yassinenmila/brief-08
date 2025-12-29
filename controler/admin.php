<?php 

$b= new book($db->conn);

$books=$b->admin();




?>
<?php require_once __DIR__."/../views/admin.views.php"; ?>