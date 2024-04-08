<?php

$title = "Inscription";
$description = "Description de la page d'insciption";

if (isset($_POST['submit'])) {

    $errors = [];

    if (empty($_POST['ssd_users']['lastname'])) {
        $errors['ssd_users']['lastname'] = 'Veuillez renseigner un nom';
    }

    if (empty($_POST['ssd_users']['firstname'])) {
        $errors['ssd_users']['firstname'] = 'Veuillez renseigner un prénom';
    }

    if (empty($_POST['ssd_users']['email']) || !filter_var($_POST['ssd_users']['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['ssd_users']['email'] = 'Veuillez renseigner un email';
    }

    if (empty($_POST['ssd_users']['password'])) {
        $errors['ssd_users']['password'][] = 'Veuillez renseigner un mot de passe';
    }else{

        if (strlen($_POST['ssd_users']['password']) < 8) {
            $errors['ssd_users']['password'][] = 'Le mot de passe doit contenir au moins 8 caractères';
        }

        if (!preg_match('/[A-Z]/', $_POST['ssd_users']['password'])) {
            $errors['ssd_users']['password'][] = 'Le mot de passe doit contenir au moins une majuscule';
        }

        if (!preg_match('/[a-z]/', $_POST['ssd_users']['password'])) {
            $errors['ssd_users']['password'][] = 'Le mot de passe doit contenir au moins une minuscule';
        }

        if (!preg_match('/[0-9]/', $_POST['ssd_users']['password'])) {
            $errors['ssd_users']['password'][] = 'Le mot de passe doit contenir au moins un chiffre';
        }

        if (!preg_match('/[@!^$§&#]/', $_POST['ssd_users']['password'])) {
            $errors['ssd_users']['password'][] = 'Le mot de passe doit contenir au moins un caractère spécial (@,!,^,$,§,&,#)';
        }
    }

    if (empty($errors)) {

        $_POST['ssd_users']['password'] = password_hash($_POST['ssd_users']['password'], PASSWORD_DEFAULT);
        date_default_timezone_set('Europe/Paris');
        $_POST['ssd_users']['date_inscr'] = date('Y-m-d H:i:s');


        require '../src/data/db-connect.php';
        $query = $dbh->prepare("INSERT INTO ssd_users (nom, prenom, email, password, date_inscr) VALUES (:lastname, :firstname, :email, :password, :date_inscr)");
        $query->execute($_POST['ssd_users']);

        if (!$dbh->lastInsertId()) {
            $errors['error'] = "Erreur lors de la création de l'utilsateur";
        }else{
            $success = "Votre inscription est réussi ! Connectez-vous maintenant.";
        }
        
    }



   
}
