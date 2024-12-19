<?php

if(!isset($_SESSION)){
    session_start();
}

require_once(__DIR__."/../config/Directories.php"); //to handle folder specific path
include("..\config\DatabaseConnect.php"); //to access database connection

$db = new DatabaseConnect(); //make a new database instance

if($_SERVER["REQUEST_METHOD"] == "POST"){

}
