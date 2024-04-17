<?php

$title = 'Profil';
$description = "Description page de profil";

// Vérifier si l'ID est présent dans l'URL
if (!empty($_GET['id'])) {
    // Récupérer l'ID de l'URL et l'ajouter aux données de la requête POST
    $_POST['ssd_users']['id'] = $_GET['id'];

    // Préparer la requête avec un paramètre :id
    $query = $dbh->prepare("SELECT * FROM ssd_users WHERE id_ssd_users = :id");

    // Exécuter la requête en liant la valeur de :id à l'ID récupéré de l'URL
    $query->execute(['id' => $_GET['id']]);

    // Récupérer les données de l'utilisateur
    $user = $query->fetch();
}
