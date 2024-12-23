<?php

class DatabaseConnect
{
    private $host = "localhost";
    private $database = "ecommerce_mmanuel";
    private $dbusername = "mmanuel";
    private $dbpassword = "M34nuel_2024";
    private $conn = null;


    public function connectDB()
    {

        $dsn = "mysql: host=$this->host;dbname=$this->database;";
        try {
            $this->conn = new PDO($dsn, $this->dbusername, $this->dbpassword);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            return $this->conn;
        } catch (Exception $e) {
            echo "Connection Failed: " . $e->getMessage();
            return null;
        }
    }
}