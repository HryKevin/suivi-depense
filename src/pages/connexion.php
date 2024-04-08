<?php
$title = "Connexion";
$description = "Description de la page de connexion";

if (isset ($_POST['submit'])) {

    $errors = [];

    if (empty ($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Veuillez renseigner un email';
    }

    if (empty ($_POST['password'])) {
        $errors['password'] = 'Veuillez renseigner un mot de passe';
    }

    if (empty ($errors)) {
        $email = $_POST['email'];
        $requete = $dbh->prepare('SELECT * FROM ssd_users WHERE email = :email');
        $requete->execute(['email' => $email]);
        $utilisateur = $requete->fetch();

        if ($utilisateur) {
            if (password_verify($_POST['password'], $utilisateur['password'])) {
                //Utilisateur authentifié
                session_start();
                
                $_SESSION['user']['email'] = $utilisateur['email'];
                $_SESSION['user']['nom'] = $utilisateur['nom'];
                $_SESSION['user']['prenom'] = $utilisateur['prenom'];
                $_SESSION['user']['id'] = $utilisateur['id_ssd_users'];
                $_SESSION['user']['date'] = $utilisateur['date_inscr'];

                header('Location: /?page=profil');

            } else {
                $errors['password'] = 'Email ou mot de passe invalide';
            }
        } else {
            $errors['password'] = 'Email ou mot de passe invalide';

        }

    }
}