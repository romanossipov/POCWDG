<?php
class Database{
 
    // specify your own database credentials hellohelo
    private $host = "aziedb1rez463.mysql.database.azure.com";
    private $db_name = "api_db";
    private $username = "pocwdgaccount@aziedb1rez463";
    private $password = "YR4+_9gX\[";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>
