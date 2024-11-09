<?php
$password=$_POST["password"];
$username=$_POST["username"];
 session_start();
 if($_SERVER["REQUEST_METHOD"=="POST"])
 {
    $host = "localhost";
    $database = "eCommerce";
    $dbusername = "root";
    $dbpassword = "";

    $dsn = "mysql: host=$host; dbname=$database;";
    try {
        $conn = new PDO($dsn, $dbusername, $dbpassword);
        $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
        $stmt=$conn->prepare('Select * from "users" where username: p_username');
        $stmt->bindParam(':p_username', $username);
        $user=$stmt->fetchAll();

        if ($user){
            if (password_verify($password, $user[0]["password"])){
                echo "Login Successful"; 
            } else {
                echo "Denied, Try Again";
            }
            if ($password==$users[0]["password"]){
                echo "Granted";
            } else {
                echo "Your User Didn't Exist";
            }
        }
    } catch (Exception $e){
        echo "Connection Failed: ";
    }
 }
 ?>