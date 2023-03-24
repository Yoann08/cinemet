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

<?php
    include 'C:\wamp64\www\cinemet\content/navbar.php';
?>

<!-- Début Bannière -->
<div class="container-fluid text-light my-4" id="banner">
        <div class="d-flex justify-content-center p-5">
            <h2 class="font-title">Inscrivez-vous</h2>
        </div>
    </div>
<!-- Fin Bannière -->


<div class="d-flex justify-content-center my-5">
    
    <form class="w-50">

      <div class="my-5">
        <div class="mb-4">
          <input
            type="name"
            class="form-control"
            id="exampleInputEmail1"
            placeholder="Nom"
          />
        </div>
        <div class="mb-4">
          <input
            type="lastname"
            class="form-control"
            id="exampleInputPassword1"
            placeholder="Prénom"
          />
        </div>
        <div class="mb-4">
          <input
            type="surname"
            class="form-control"
            id="exampleInputPassword1"
            placeholder="Pseudo"
          />
        </div>
        <div class="mb-4">
          <input
            type="email"
            class="form-control"
            id="exampleInputPassword1"
            placeholder="E-mail"
          />
        </div>
        <div class="mb-4">
          <input
            type="password"
            class="form-control"
            id="exampleInputPassword1"
            placeholder="Mot de passe"
          />
        </div>
        <div class="mb-4">
          <input
            type="password"
            class="form-control"
            id="exampleInputPassword1"
            placeholder="Confirmer Mot de passe"
          />
        </div>
        
      </div>

      <div class="d-flex justify-content-center">
        <a href="../../cinemet/content/login.php" type="submit" class="btn btn-primary w-50">Continuer</a>
      </div>

    </form>

  </div>

<?php
    include 'C:\wamp64\www\cinemet\content/footer.php';
?>

</html>