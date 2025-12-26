
<?php 

if(isset($_POST['sub_log']) && $_SERVER['REQUEST_METHOD']==='POST'){

    $email=$_POST['email'] ?? '';
    $pwd=$_POST['pass'] ?? '';

    // echo $email;
    // echo $pwd;

    if(empty($email) || empty($pwd)){
        echo "veuiller remplir les champs !!";
    } else {
        $log=new reader($db->conn);
        $user=$log->login($email,$pwd);

        if($user){

            $_SESSION['user'] = [
                'id'    => $user['id'],
                'nom'   => $user['nom'],
                'email' => $user['email'],
                'role'  => $user['role']
            ];

            header("Location:/home");
            exit;
            
        }else{
            echo "there is a problem here !!!";
        }
    }
}
?>
<?php require_once __DIR__."/../views/login.views.php"; ?>