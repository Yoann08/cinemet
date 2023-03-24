<?php
try {
        $host = "localhost";
        $username = "root"; 
        $password = "";
        $db = "cinemet"; 

        $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $conn;
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
}
?>