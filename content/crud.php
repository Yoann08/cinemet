<?php session_start();
require '../../cinemet/asset/config/function.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../cinemet/asset/css/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../../cinemet/asset/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">
    <title>Cinemet</title>
</head>

<body class="bg-light">
  <header>

<?php
    include 'C:\wamp64\www\cinemet\content/navbar.php';
?>
  </header>

<?php 
try{
  $results = showFilm();
  
}
   catch(Exception $e) {
  die('Erreur : '.$e->getMessage());
}
?>

  <div class="mx-3 mb-2">
    <a href="../../cinemet/content/form_ajouter.php" type="button" class="btn btn-success mt-5 px-4">Ajouter</a>
  </div>

      <table class="table table-hover table-striped table-bordered table-responsive">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Titre</th>
            <th scope="col">Genre</th>
            <th scope="col">Synopsis</th>
            <th scope="col">Affiche</th>
            <th scope="col">Bande-annonce</th>  
            <th scope="col"></th>      
          </tr>
        </thead>
        <tbody>
        
<?php
    foreach ($results as $result){ 
    $exResult=explode("&", $result['url_ba']);
    ?>
          <tr>
            <td class="align-middle"><?=$result['Id_Film']?></td>
            <td class="align-middle"><?=$result['titre']?></td>
            <td class="align-middle"><?=$result['genre']?></td>
            <td class="align-middle"><?=$result['synopsis']?></td>
            <td class="align-middle"><img src="../../cinemet/asset/upload/<?=$result['img']?>" height="200px" alt=""></td>
            <td class="align-middle"><iframe width="300" height="200" 
            src="<?=$exResult[0]?>"
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            allowfullscreen></iframe></td>
            <td class="align-middle"><a href="../../cinemet/content/form_update.php" class="text-warning">Modifier</a> <br/> <a href="../../cinemet/content/form_delete.php?id=<?=$result['Id_Film']?>" class="text-danger">Supprimer</a></td>
          </tr>
<?php
   }
?>   
    </tbody>
  </table>
  

<?php
  include 'C:\wamp64\www\cinemet\content/footer.php';
?>
</body>
</html>