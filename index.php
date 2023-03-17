<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Cinemet</title>
</head>

<body>

    <?php
        include './content/navbar.php';
    ?>

<!-- Début du caroussel -->
<div
    id="carouselExampleAutoplaying"
    class="carousel slide"
    data-bs-ride="carousel"
  >
    <div class="carousel-inner">
      <div class="carousel-item">
        <img src="./asset/img/emancipation.jpg" alt="Affiche du film emancipation avec Will Smith"
        class="bd-placeholder-img bd-placeholder-img-lg d-block w-100"
        width="800"
        height="600"
        xmlns="http://www.w3.org/2000/svg"
        role="img"
        aria-label="Placeholder: Second slide"
        preserveAspectRatio="xMidYMid slice"
        focusable="false">
      </div>
      <div class="carousel-item active">
        <img src="./asset/img/emancipation.jpg"
          class="bd-placeholder-img bd-placeholder-img-lg d-block w-100"
          width="800"
          height="600"
          xmlns="http://www.w3.org/2000/svg"
          role="img"
          aria-label="Placeholder: Second slide"
          preserveAspectRatio="xMidYMid slice"
          focusable="false"
        >
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#666"></rect>
        </img>
      </div>
      <div class="carousel-item">
        <img src="./asset/img/emancipation.jpg"
          class="bd-placeholder-img bd-placeholder-img-lg d-block w-100"
          width="800"
          height="600"
          xmlns="http://www.w3.org/2000/svg"
          role="img"
          aria-label="Placeholder: Third slide"
          preserveAspectRatio="xMidYMid slice"
          focusable="false"
        >
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#555"></rect>
        </img>
      </div>
    </div>
    <button
      class="carousel-control-prev"
      type="button"
      data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button
      class="carousel-control-next"
      type="button"
      data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!-- fin du carroussel -->

<!-- Début Bannière -->
    <div class="container-fluid text-light my-4" id="banner">
        <div class="d-flex justify-content-center pt-4">
            <h2 class="font-title">Film à l'affiche</h2>
        </div>
        <div class="d-flex justify-content-center pb-4">
            <p class="font-text">Du 01/03/2023 au 31/03/2023</p>
        </div>
    </div>
<!-- Fin Bannière -->

<!-- Affiche de film -->
<div class="d-flex flex-wrap">
    <img src="./asset/img/blade.jpg"
    class="bd-placeholder-img img-thumbnail m-2"
    width="200"
    height="300">
    </img>
  <img src="./asset/img/blade.jpg"
    class="bd-placeholder-img img-thumbnail m-2"
    width="200"
    height="300">
  </img>
  <img src="./asset/img/blade.jpg"
    class="bd-placeholder-img img-thumbnail m-2"
    width="200"
    height="300">
  </img>
  <img src="./asset/img/blade.jpg"
    class="bd-placeholder-img img-thumbnail m-2"
    width="200"
    height="300">
  </img> 
  <img src="./asset/img/blade.jpg"
    class="bd-placeholder-img img-thumbnail m-2"
    width="200"
    height="300">
  </img>
  <img src="./asset/img/blade.jpg"
    class="bd-placeholder-img img-thumbnail m-2"
    width="200"
    height="300">
  </img>
  <img src="./asset/img/blade.jpg"
    class="bd-placeholder-img img-thumbnail m-2"
    width="200"
    height="300">
  </img>
  <img src="./asset/img/blade.jpg"
    class="bd-placeholder-img img-thumbnail m-2"
    width="200"
    height="300">
  </img>
  <img src="./asset/img/blade.jpg"
    class="bd-placeholder-img img-thumbnail m-2"
    width="200"
    height="300">
  </img>
  <img src="./asset/img/blade.jpg"
    class="bd-placeholder-img img-thumbnail m-2"
    width="200"
    height="300">
  </img>
  <img src="./asset/img/blade.jpg"
    class="bd-placeholder-img img-thumbnail m-2"
    width="200"
    height="300">
  </img>
  <img src="./asset/img/blade.jpg"
    class="bd-placeholder-img img-thumbnail m-2"
    width="200"
    height="300">
  </img>
  <img src="./asset/img/blade.jpg"
    class="bd-placeholder-img img-thumbnail m-2"
    width="200"
    height="300">
  </img>
  <img src="./asset/img/blade.jpg"
    class="bd-placeholder-img img-thumbnail m-2"
    width="200"
    height="300">
  </img>
  <img src="./asset/img/blade.jpg"
    class="bd-placeholder-img img-thumbnail m-2"
    width="200"
    height="300">
  </img>
  <img src="./asset/img/blade.jpg"
    class="bd-placeholder-img img-thumbnail m-2"
    width="200"
    height="300">
  </img>
  <img src="./asset/img/blade.jpg"
    class="bd-placeholder-img img-thumbnail m-2"
    width="200"
    height="300">
  </img>
  <img src="./asset/img/blade.jpg"
    class="bd-placeholder-img img-thumbnail m-2"
    width="200"
    height="300">
  </img>
  <img src="./asset/img/blade.jpg"
    class="bd-placeholder-img img-thumbnail m-2"
    width="200"
    height="300">
  </img>
  <img src="./asset/img/blade.jpg"
    class="bd-placeholder-img img-thumbnail m-2"
    width="200"
    height="300">
  </img> 
</div> 
<!-- Fin des Affiches de film -->

<!-- Début Bannière -->
<div class="container-fluid text-light my-4" id="banner">
        <div class="d-flex justify-content-center p-5">
            <h2 class="font-title">Liens Utiles</h2>
        </div>
    </div>
<!-- Fin Bannière -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>