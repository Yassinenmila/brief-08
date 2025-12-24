<?php 

abstract class User {

    private $conn;
    protected $email;
    protected $password;

    public function __construct($conn){
        $this->conn=$conn;
    }

    public function login($email,$password){
        $stmt=$this->conn->prepare("SELECT * FROM users WHERE email=?");
        $stmt->execute([$email]);

        $user=$stmt->fetch(PDO::FETCH_ASSOC);

        if($user && password_verify($password,$user['pwd'])){
            return $user;
        }
        
        return false;
    }

    public function signup($nom,$prenom,$nationalite,$email,$pwd,$desc){

        $pdo="INSERT INTO users (nom,prenom,nationalite,email,pwd,descr,role) VALUES (?,?,?,?,?,?,?)";
        $stmt=$this->conn->prepare($pdo);
        $stmt->execute([$nom,$prenom,$nationalite,$email,password_hash($pwd,PASSWORD_DEFAULT),$desc,'user']);
        
        return $this->conn->lastInsertId();

    }
}
?>