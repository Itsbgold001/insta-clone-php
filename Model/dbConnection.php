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
    public function Busca(){
        
    }
    
}