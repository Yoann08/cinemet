<?php session_start();
require '../../cinemet/asset/config/connect.php'
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

<h1 class="d-flex justify-content-center">Supprimer le film</h1>
<?php 
    $id = $_GET['id'];
    // var_dump($id);
?>
<form action="../../cinemet/traitement/delete.php?Id_Film=<?=$id?>" method="GET">
    <div class="mb-3 visually-hidden">
        <label for="id" class="form-label">Identifiant du Film</label>
        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id;?>">
    </div>
    
    <button type="submit" class="btn btn-danger">Supprimer de façon définitive</button>
    
</form>

</body>
</html>