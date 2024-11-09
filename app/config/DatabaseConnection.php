<?php
 
 class DatabaseConnection{
    private $host = "localhost";
    private $database = "eCommerce";
    private $dbusername = "root";
    private $dbpassword = "";
    private $conn = null;
    

    public function connectDB(){
    $host = "localhost";
    $database = "eCommerce";
    $dbusername = "root";
    $dbpassword = "";

    $den = "mysql: host=$this->host; dbname=$this->database;";
    try{
        $this->conn = new PDO($dsn, $this->dbusername, $this->dbpassword);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


        return $this->conn;
    } catch (Exception $e){
        echo "Connection Failed: " , $e->getMessage();
    }
  }
}

?>