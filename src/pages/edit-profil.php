<?php

//On vérifie que l'id de l'utilisateur est passé dans l'url
if(!empty($_GET['id'])) {

    require '../src/data/db-connect.php';

    
    // Récupérer l'ID de l'URL et l'ajouter aux données de la requête POST
    $_POST['ssd_users']['id'] = $_GET['id'];

    // Préparer la requête avec un paramètre :id
    $query = $dbh->prepare("SELECT * FROM ssd_users WHERE id_ssd_users = :id");

    // Exécuter la requête en liant la valeur de :id à l'ID récupéré de l'URL
    $query->execute(['id' => $_GET['id']]);

    // Récupérer les données de l'utilisateur
    $user = $query->fetch();
    

    // On vérifie que le formulaire de modification est envoyé
    if (isset($_POST['submit'])) {
    $errors = [];

    // On rajoute l'id dans les données du POST
    $_POST['ssd_users']['id'] = $_GET['id'];

    if (empty($_POST['ssd_users']['lastname'])){
    $errors['ssd_users']['lastname'] = 'Veuillez renseigner un nom';
    }

    if (empty($_POST['ssd_users']['firstname'])){
    $errors['ssd_users']['firstname'] = 'Veuillez renseigner un prénom';
    }

    if(empty($_POST['ssd_users']['email'])){
    $errors['ssd_users']['email'] = 'Veuillez renseigner un email';
    }else{
    if (!filter_var($_POST['ssd_users']['email'], FILTER_VALIDATE_EMAIL)){
    $errors['ssd_users']['email'] = 'Veuillez renseigner un email valide';
    }
    }

        if (empty($errors)) {


            // Préparer la requête
            $requete = $dbh->prepare('UPDATE ssd_users SET nom = :lastname, prenom = :firstname, email = :email WHERE id_ssd_users = :id');

            // Exécution de la requête
            $requete->execute($_POST['ssd_users']);

            if ($requete->rowCount() > 0) {
                header('Location: /?page=profil&id=' . $_GET['id']);
                exit;
            } else {
                $errors['error'] = "Une erreur s'est produite lors de la mise à jour.";
            }
            // Redirection vers une autre page après la mise à jour
        }
    }
    
} else {
    echo "Erreur : id de l'utilisateur manquant";
    exit;
}