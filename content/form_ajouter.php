<?php session_start(); ?>

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
   
<form method="POST" action="../../cinemet/traitement/traitement_ajouter.php" class="d-flex justify-content-center">
    <div class="my-5 w-75">
        <div class="mb-3">
            <input
                name="titre"
                type="text"
                class="form-control"
                placeholder="Titre du Film"
            />
        </div>
        <div class="mb-3">
            <select class="form-select" name="genre">
                <option selected disabled>Genre</option>
                <option value="1">Action</option>
                <option value="2">Aventure</option>
                <option value="3">Comédie</option>
                <option value="4">Drame</option>
                <option value="5">Horreur</option>
                <option value="6">Science-fiction</option>
                <option value="7">Thriller</option>
                <option value="8">Romance</option>
                <option value="9">Animation</option>
                <option value="10">Documentaire</option>
                <option value="11">Fantaisie</option>
                <option value="12">Policier</option>
                <option value="13">Guerre</option>
                <option value="14">Western</option>
                <option value="15">Musique</option>
            </select>
        </div>

  <div class="mb-3">
    <textarea
        name="synopsis"
        rows="4"
        class="form-control"
        placeholder="Synopsis du Film complet...">
    </textarea>
  </div>

  <div class="mb-3">
    <input class="form-control" type="file" name="affiche" id="formFile"/>
  </div>

  <div class="mb-3">
    <input
      name="url_ba"
      type="text"
      class="form-control"
      placeholder="URL Bande Annonce"/>
  </div> 
  <div>
    <button type="submit" name="submit" class="btn btn-primary px-4">Confirmer</button>
  </div>
</div>

</form>

</body>
</html>
