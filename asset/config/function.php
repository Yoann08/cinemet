<?php

include ('C:\wamp64\www\cinemet\asset\config\connect.php');

function showFilm() {
    if (require'connect.php') {
    $reqShow= $conn->prepare('SELECT * from film');
    $reqShow->execute();
    $result=$reqShow->fetchAll();
return $result;
}}

?>