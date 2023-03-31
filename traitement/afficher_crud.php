<?php
require '../../cinemet/asset/config/connect.php';

$reqShow= $conn->prepare('SELECT * from film');
$reqShow->execute();
$result=$reqShow->fetchAll();
return $result;
?>