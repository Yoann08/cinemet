<?php
include '../../cinemet/asset/config/connect.php';
// var_dump($_POST);

if(isset($_POST['submit'])) {

$errors = array();

if(empty($_POST['nom']) && !preg_match('/^[a-zA-Z]+$/',$_POST['nom'])){
    $errors['nom']="Le nom est incorect";
}

if(empty($_POST['prenom']) || !preg_match('/^[a-zA-Z]+$/',$_POST['prenom'])){
    $errors['prenom']="Le prenom est incorect";
}

if(empty($_POST['pseudo']) || !preg_match('/^[a-zA-Z0-9_]+$/',$_POST['pseudo'])){
    $errors['pseudo']="Le pseudo est incorect";
}else{
    // verif_pseudo();
    $ver=$conn->prepare("SELECT Id_Utilisateurs FROM utilisateurs WHERE pseudo= ? ");
    $ver->execute([$_POST['pseudo']]);
    $pseudo=$ver->fetch();
    if($pseudo){
        $errors['pseudo']="Le pseudo existe deja";
    }

}

if(empty($_POST['email']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
    $errors['email']="L'email est incorect";
}else{
    // verif_mail();
    $veremail=$conn->prepare("SELECT Id_Utilisateurs FROM utilisateurs WHERE email= ? ");
    $veremail->execute([$_POST['email']]);
    $email=$veremail->fetch();
    if($email){
        $errors['email']="L'adresse mail existe deja";
    }
}



if(empty($_POST['password']) || $_POST['password']!=$_POST['repeatpassword'] || !preg_match('/^(?=.{8,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$/',$_POST['password']))

if(empty($errors)){
    // add_user();
    $id_role = 2;
    $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
    $req=$conn->prepare("INSERT INTO `utilisateurs`(`nom`, `prenom`, `pseudo`, `email`, `password`, `Id_role`) VALUES (?, ?, ?, ?, ?, ?)");
    $req->execute([$_POST['nom'], $_POST['prenom'], $_POST['pseudo'], $_POST['email'],$password, $id_role]);
    echo "<p>inscription reussie</p>";
    header('location: ../../../../cinemet/content/login.php');
}

}
?>