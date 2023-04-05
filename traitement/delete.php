<?php session_start();

require '../../cinemet/asset/config/connect.php';

// var_dump($_GET);

$id = $_GET['id'];
if(!empty($id)) {

    $deleteFilm = $conn->prepare('DELETE FROM film WHERE Id_Film = :id');
    $deleteFilm->execute(['id' => $id] );

    header('Location: ../../../../cinemet/content/crud.php');
}

?>