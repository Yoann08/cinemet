<?php
include '../../cinemet/asset/config/connect.php';

if($_POST) {
$nom =htmlspecialchars($_POST['nom']);
$prenom =htmlspecialchars($_POST['prenom']);
$pseudo =htmlspecialchars($_POST['pseudo']);
$email =htmlspecialchars($_POST['email']);
$password =htmlspecialchars($_POST['password']);
$reapeatpassword =htmlspecialchars($_POST['password']);
$submit = $_POST;

if (isset($_POST)) {

$errors = array();

if(empty($nom) && !preg_match('/^[a-zA-Z]+$/',$nom)){
    $errors['nom']="Le nom est incorect";
}

if(empty($prenom) || !preg_match('/^[a-zA-Z]+$/',$prenom)){
    $errors['prenom']="Le prenom est incorect";
}

if(empty($pseudo) || !preg_match('/^[a-zA-Z0-9_]+$/',$pseudo)){
    $errors['pseudo']="Le pseudo est incorect";
}else{
    // verif_pseudo();
    $verif_pseudo=$conn->prepare("SELECT Id_Utilisateurs FROM utilisateurs WHERE pseudo = :pseudo");
    $verif_pseudo->execute(['pseudo'=>$pseudo]);
    $pseudoFind=$verif_pseudo->fetch(); 
 
    if($pseudoFind){
        $errors['pseudo']="Le pseudo existe deja";
    }

}

if(empty($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors['email']="L'email est incorect";
}else{
    // verif_mail();
    $verif_email=$conn->prepare("SELECT Id_Utilisateurs FROM utilisateurs WHERE email = :email");
    $verif_email->execute(['email'=>$email]);
    $emailFind=$verif_email->fetch();
    if($emailFind){
        $errors['email']="L'adresse mail existe deja";
    }
}

if(empty($password) || $password!=$reapeatpassword || !preg_match('/^(?=.{8,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$/',$password));

if(empty($errors)){
    // add_user();
    $id_role = 2;
    $password=password_hash($password,PASSWORD_BCRYPT);
    $req=$conn->prepare("INSERT INTO `utilisateurs`(`nom`, `prenom`, `pseudo`, `email`, `password`, `Id_role`) VALUES (?, ?, ?, ?, ?, ?)");
    $req->execute([$nom, $prenom, $pseudo, $email ,$password, $id_role]);
    echo "<p>inscription reussie</p>";
    header('location: ../../../../cinemet/content/login.php');
}

}

}
?>