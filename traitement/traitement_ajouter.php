<?php session_start() ?>

<?php 
require '../../cinemet/asset/config/connect.php';

if(isset($_POST['submit'])) {
    
    if(!isset($_POST['titre']) || empty($_POST['titre'])
    ||
    !isset($_POST['genre']) || empty($_POST['genre'])
    ||
    !isset($_POST['synopsis']) || empty($_POST['synopsis'])
    ||
    !isset($_POST['affiche']) || empty($_POST['affiche'])
    ||
    !isset($_POST['url_ba']) || empty($_POST['url_ba']))
    {
        echo "Champs vide! Veuillez remplir le formulaire avant de Valider";

    } else {
        $titre =htmlspecialchars($_POST['titre']);
        $genre =($_POST['genre']);
        $synopsis =htmlspecialchars($_POST['synopsis']);
        $affiche =htmlspecialchars($_POST['affiche']);
        $url_ba =htmlspecialchars($_POST['url_ba']);
        $embed_ba = str_replace("watch?v=", "embed/", $url_ba);
        
            //Requête d'insertion dans la base de donnée.
            $reqInsert = 'INSERT INTO film (titre, genre, synopsis, img, url_ba) VALUES (:titre, :genre, :synopsis, :img, :url_ba)';
            $insertFilm = $conn->prepare($reqInsert);
            $insertFilm->execute([
                'titre' => $titre,
                'genre' => $genre,
                'synopsis' => $synopsis,
                'img' => $affiche,
                'url_ba' => $embed_ba,]);

                echo "Upload Réussi";
                header('Location: ../../../../cinemet/content/crud.php');
        }
        
    } 
?>
