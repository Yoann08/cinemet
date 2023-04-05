<?php session_start();

require '../../cinemet/asset/config/connect.php';

$postData = $_POST;

if(!isset($_POST['Id_Film'])
|| !isset($postData['titre'])
|| !isset($postData['genre'])
|| !isset($postData['synopsis'])
|| !isset($postData['img'])
|| !isset($postData['url_ba'])
) 
{
    echo "il manque des infos pour update le form";
    return;
}

$id = ($_POST['Id_Film']);
$titre = ($postData['titre']);
$genre = ($postData['genre']);
$synopsis = ($postData['synopsis']);
$img = ($postData['img']);
$url_ba = ($postData['url_ba']);

$updateFilm = $conn->prepare('UPDATE FROM film SET Id_Film =?, titre =?, genre =?, synopsis =?, img =?, url_ba =? WHERE Id_Film = ?');
$updateFilm->execute([
    'titre' => $titre,
    'genre' => $genre,
    'synopsis' => $synopsis,
    'img' => $img,
    'url_ba' => $url_ba,
    'Id_Film' => $id,
]);

?>