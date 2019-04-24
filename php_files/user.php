<?php

require 'db.php';
class User
{
    private $Database;
    private $pdo;

    function __construct()
    {
        $this->Database = Db::getInstance();
        $this->pdo = $this->Database->getConnection();
    }

    public function save ($name, $surname, $email, $password) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $this->Database->query("INSERT INTO users (name,surname,email, password)"
            . "VALUES ('$name' , '$surname', '$email','$hash')");
        $this->Database->execute();
    }

    public function find ($email) {
        $this->Database->query("SELECT * FROM users WHERE email='$email'");

        $this->Database->execute();

        return $this->Database->stmp->fetch(PDO::FETCH_ASSOC);

    }

    public function checkCredentials($email, $password){
        $arr = $this->find($email);
        return password_verify($password, $arr['password']);
    }

//    public function rowCount(){
//        $this->pdo = $this->pdo->prepare($this->pdo);
//        $this->pdo->execute();
//        $this->pdo->rowCount();
//    }

}
?>