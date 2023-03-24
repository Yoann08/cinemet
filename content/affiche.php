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
            <h2 class="font-title">A L'Affiche</h2>
        </div>
    </div>
<!-- Fin Bannière -->


<div class="d-flex justify-content-between" id="research">
    <select class="form-select w-25 ms-4 font-text">
      <option selected="">Genre</option>
      <option value="1">Action</option>
      <option value="2">Horreur</option>
      <option value="3">Romantique</option>
      <option value="3">Comedie</option>
      <option value="3">Science fiction</option>
      <option value="3">Drame</option>
      <option value="3">Animation</option>
      <option value="3">Jeunesse</option>
      <option value="3">Policier</option>
      <option value="3">Documentaire</option>
    </select>

    <form class="d-flex w-25" role="search">
      <input
        class="form-control me-2"
        type="search"
        placeholder="Entrer votre Titre"
      />
      <button class="btn btn-outline-light me-4" type="submit">Cherchez</button>
    </form>
  </div>

  <div class="m-5 text-light font-title">
    <h3>Top 10</h3>
    <hr />
    <swiper-container class="mySwiper" slides-per-view="4"
    space-between="10" centered-slides="true" loop="true" navigation="true">
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    </swiper-container>
  </div>


  <div class="m-5 text-light font-title">
    <h3>Incontournable</h3>
    <hr />
    <swiper-container class="mySwiper" slides-per-view="4"
    space-between="10" centered-slides="true" loop="true" navigation="true">
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    </swiper-container>
  </div>

  <div class="m-5 text-light font-title">
    <h3>Tendances actuelles</h3>
    <hr />
    <swiper-container class="mySwiper" slides-per-view="4"
    space-between="10" centered-slides="true" loop="true" navigation="true">
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    </swiper-container>
  </div>

  <div class="m-5 text-light font-title">
    <h3>Série</h3>
    <hr />
    <swiper-container class="mySwiper" slides-per-view="4"
    space-between="10" centered-slides="true" loop="true" navigation="true">
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    </swiper-container>
  </div>

  <div class="m-5 text-light font-title">
    <h3>Blockbuster</h3>
    <hr />
    <swiper-container class="mySwiper" slides-per-view="4"
    space-between="10" centered-slides="true" loop="true" navigation="true">
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    </swiper-container>
  </div>

  <div class="m-5 text-light font-title">
    <h3>Nouveautés</h3>
    <hr />
    <swiper-container class="mySwiper" slides-per-view="4"
    space-between="10" centered-slides="true" loop="true" navigation="true">
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    <swiper-slide><img src="../../cinemet/asset/img/blade.jpg" alt=""></swiper-slide>
    </swiper-container>
  </div>



<?php
  include 'C:\wamp64\www\cinemet\content/footer.php';
?>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>

</html>