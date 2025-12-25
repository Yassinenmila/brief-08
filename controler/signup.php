<?php 

if(isset($_POST['sub_sign']) && $_SERVER['REQUEST_METHOD'] === 'POST'){

    $l_name=$_POST['l_name'] ?? '';
    $f_name=$_POST['f_name'] ?? '';
    $nation=$_POST['nation'] ?? '';
    $email=$_POST['email'] ?? '';
    $pass=$_POST['pass'] ?? '';
    $conf=$_POST['conf_pass'] ?? '';
    $desc="";

    if(empty($l_name)||empty($f_name)||empty($nation)||empty($email)|| empty($pass)||empty($conf)){
        
        echo 'veuiller remplir tout les champs !!!';
    }elseif($pass != $conf){
        echo 'veuiller saisir le mots de pass correctement !!!';
    }else{
        $sign= new reader ($db->conn);
        $user=$sign->signup($l_name,$f_name,$nation,$email,$pass,$desc);
        if ($user) {
            header("Location: login");
            
            exit;
        } else {
            $error = "Email déjà utilisé";
        }

    }
}
?>

<?php require_once __DIR__."/../views/signup.views.php"; ?>