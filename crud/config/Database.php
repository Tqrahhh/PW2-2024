<?php
class Database {
    private $host = "localhost";
    private $database = "dbpos";
    private $username = "root";
    private $password = "";
    public $conn;

    public function dbConnection(){
        $this->conn = null;
        try{
            $this->conn = new PDO(
                "mysql:host=$this->host;
                dbname=$this->database",
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $exception){
            die("Connection error: " . $exception->getMessage());
        }
        return $this->conn;
    }
}
?>