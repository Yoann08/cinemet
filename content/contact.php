<?php session_start() ?>
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Cinemet</title>
</head>

<?php
  include 'C:\wamp64\www\cinemet\content/navbar.php';
?>

<!-- Début Bannière -->
<div class="container-fluid text-light my-4" id="banner">
        <div class="d-flex justify-content-center p-5">
            <h2 class="font-title">Contactez-nous</h2>
        </div>
    </div>
<!-- Fin Bannière -->


<div class="d-flex justify-content-center my-5">
    
    <form class="w-50">

      <!-- <div class="mb-5 text-light">
        <h1>Contactez-nous</h1>
      </div> -->

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
            type="email"
            class="form-control"
            id="exampleInputPassword1"
            placeholder="E-mail"
          />
        </div>
        <div class="mb-4">
            <textarea
            class="form-control"
            id="exampleFormControlTextarea1"
            rows="3"
            placeholder="Ecrivez votre message..."
            ></textarea>
        </div>        
    </div>

      <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary w-50">Envoyez</button>
      </div>

    </form>

</div>

<?php
  include 'C:\wamp64\www\cinemet\content/footer.php';
?>

</html>