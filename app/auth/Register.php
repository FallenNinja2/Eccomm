<?php
include("../config/DatabaseConnection.php");

$fullname=$_POST["fullname"];
$password=$_POST["password"];
$username=$_POST["username"];
$confirmpassword=$_POST["confirmPassword"];
echo $fullname. "<br>";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if (trim($password)==trim($confirmpassword))
    {
        $host = "localhost";
        $database = "eCommerce";
        $dbusername = "root";
        $dbpassword = "";

        $dsn = "mysql: host;$dbname=$database";
        try {
            $conn = new PDO($dsn, $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $stmt=$conn->prepare("INSERT INTO user(fullname, username, password, created_ai, update_ai) VALUE (:p_fullname, p_username, p_password, NOW(), NOW())");
            $stmt->bindParam(':p_username', $username);
            $stmt->bindParam(':p_fullname', $fullname);
            $stmt->bindParam(':p_password', $password);
            $stm->execute();
            header("location: /registration.php?success=Registration Successful");
            echo "Connection Successful.";
        } catch (Exception $e){
            echo "Connection Failed: ";
        }
    } else {
        header("location: /registration.php?/error=Password not the same");
    }
}
?>