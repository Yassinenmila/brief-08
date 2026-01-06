<?php 

$b= new book($db->conn);

$books=$b->admin();

if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['delete'])){

    $id=$_POST['id'];
    
    $d=new Admin($db->conn);
    $d->delete($id);

    header("Location:/admin");
    exit;

}


?>
<?php require_once __DIR__."/../views/admin.views.php"; ?>