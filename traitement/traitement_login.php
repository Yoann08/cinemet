<?php session_start();

include '../../cinemet/asset/config/connect.php';

if($_POST) {
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    
    if (empty($email) || empty($password)) {
        echo "champs vides";
    }else{
        $email_verif=$conn->prepare("SELECT * FROM utilisateurs WHERE email= :email");
        $email_verif->execute(['email' => $email]);
        $email_find=$email_verif->fetch();
        $pass_email = $email_find ["password"];
        $find_email = $email_find ['email']; 
        
        if((password_verify($password, $pass_email))) {
            $_SESSION['id'] = $email_find['Id_Utilisateurs'];
            $_SESSION['pseudo'] = $email_find['pseudo'];
            header('Location: ../index.php');
        } else 
        echo "Mot de passe invalide";
    }

}

?>
