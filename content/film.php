<? session_start() ?>
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

<section class="bg-light">

<?php
    include 'C:\wamp64\www\cinemet\content/navbar.php';
?>

    <div class="container-fluid text-light my-4" id="banner">
    <div class="d-flex justify-content-start py-4">
      <h2 class="font-title">Blade Runner 2049</h2>
    </div>
  </div>

  <div class="d-flex m-4">
    <div class="pe-5">
      <img src="../../cinemet/asset/img/blade.jpg" alt="Affiche du film blade runner 2049" height="250px" />
    </div>

    <div>
      <h2 class="font-title">Information sur le film</h2>
      <p>En salle le <strong>Jour de sa Sortie</strong></p>
      <p>
        Réaliser par: <strong><span>Hassan Cehef</span></strong>
      </p>
      <p>
        Avec: <strong><span>Hubert Eats, Jacques Ouzi</span></strong>
      </p>
      <div>
        <p>Ma Note:
          <span><i class="fa-regular fa-star"></i></span>
          <span><i class="fa-regular fa-star"></i></span>
          <span><i class="fa-regular fa-star"></i></span>
          <span><i class="fa-regular fa-star"></i></span>
          <span><i class="fa-regular fa-star"></i></span>
        </p>
      </div>
      <div>
        <p>Note du public:
          <span><i class="fa-regular fa-star"></i></span>       
          <span><i class="fa-regular fa-star"></i></span>       
          <span><i class="fa-regular fa-star"></i></span>       
          <span><i class="fa-regular fa-star"></i></span>       
          <span><i class="fa-regular fa-star"></i></span>            
        </p>
      </div>
    </div>
  </div>

  <div class="container-fluid text-light my-4" id="banner">
    <div class="d-flex justify-content-start py-4">
      <h2 class="font-title">Synopsis</h2>
    </div>
  </div>

<div class="font-text">
  <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
    condimentum nulla vel massa varius, sit amet sodales metus lobortis. Nullam
    id mi sem. Phasellus nunc erat, placerat vitae vestibulum eget, luctus ut
    quam. Donec id consectetur dui. Interdum et malesuada fames ac ante ipsum
    primis in faucibus. Curabitur pretium libero eget diam iaculis consequat.
    Etiam dui odio, maximus sed nunc et, cursus porta tortor. Morbi molestie in
    magna sit amet vulputate. Donec tincidunt justo in leo tempus tincidunt vel
    et leo. Mauris et nibh vehicula, tempus mauris non, gravida quam. Nulla sed
    libero vel libero condimentum maximus. Sed vestibulum sem vel dolor mollis
    tincidunt. Sed tincidunt hendrerit velit, at hendrerit leo vestibulum id.
    Donec non urna convallis, scelerisque orci at, volutpat mi. Ut venenatis ex
    quam, eget euismod augue sodales vitae. Donec eu magna quis felis ultricies
    dictum. Vivamus pharetra eu eros eu convallis. Nulla suscipit venenatis
    hendrerit. In commodo posuere lectus, eget malesuada urna posuere in.
    Vestibulum commodo facilisis lacus. Fusce id massa tortor. Praesent nisi
    tortor, rutrum et vestibulum egestas, convallis a felis. Maecenas tincidunt
    augue dui, at congue metus sodales id. Aliquam viverra odio non metus
    commodo, eu viverra nulla bibendum. Lorem ipsum dolor sit amet, consectetur
    adipiscing elit. Quisque dignissim mauris quis orci tempus, in elementum
    nunc pellentesque. Donec laoreet velit quis neque efficitur mattis. Etiam
    fermentum quam purus, quis tincidunt neque facilisis dignissim. Fusce
    finibus, urna vitae vehicula aliquet, augue tortor vulputate nibh, at rutrum
    tellus eros in nulla. Vestibulum aliquet dui id dapibus semper. Praesent
    purus ipsum, sollicitudin quis porta in, commodo a ipsum. Vestibulum vel
    sodales lectus. Aliquam consequat eros et auctor faucibus. Morbi efficitur
    enim tincidunt, interdum nulla eget, tincidunt augue. Etiam nunc neque,
    lacinia eu pretium ut, laoreet a leo. Nunc venenatis leo nulla, quis
    tincidunt lectus convallis in.
  </p>
</div>

  <div class="container-fluid text-light my-4" id="banner">
    <div class="d-flex justify-content-start py-4">
      <h2 class="font-title">Bande Annonce</h2>
    </div>
  </div>

  <div class="d-flex justify-content-center mb-5">
  <iframe 
   width="560" 
   height="315" 
   src="https://www.youtube.com/embed/gCcx85zbxz4" 
   title="YouTube video player" 
   frameborder="0" 
   allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
   allowfullscreen>
   </iframe>
  </div>

<?php
  include 'C:\wamp64\www\cinemet\content/footer.php';
?>

</section>

</html>