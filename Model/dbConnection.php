<?php
class Conexao{

    private $dbHost = 'localhost';
    private $dbUser = 'root';
    private $dbPassword = '';
    private $dbName = 'instamvp';

    private function Conectar(){ 
    
        $dbConnection = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbName);

        return $dbConnection;
    }


    public function Cadastro($phoneMail,$completeName,$user,$password){
        $sql = "INSERT INTO users (phoneMail, completeName, user, pass) VALUES ('$phoneMail', '$completeName', '$user', '$password')";

        $con = $this->Conectar();

        $con->query($sql);
    }
    public function Login($phoneMail,$password){

        $sql = "SELECT phoneMail,pass FROM users WHERE phoneMail = '$phoneMail'";

        $con = $this->Conectar();
       
        $con->query($sql);    
        // Resultado da pesquisa
    $dbArray = mysqli_fetch_array($con);

    // Validacao de login
    if ($phoneMail == $dbArray[0]  && $password == $dbArray[1]) {
    include_once("../Model/session.php");
    header('Location: ../View/feed.php');
    } else {
    header('Location: ../View/login.html');
    }
    }
    
}