<?php

$title = 'Modifier le profil';
$description = "Description page de modification de profil";


if (isset($_POST['submit'])) {
    $errors = [];

    if (empty($_POST['ssd_users']['lastname'])){
        $errors['ssd_users']['lastname'] = 'Veuillez renseigner un nom';
    }

    if (empty($_POST['ssd_users']['firstname'])){
        $errors['ssd_users']['fisrtname'] = 'Veuillez renseigner un prénom';
    }

    if(empty($_POST['ssd_users']['email'])){
        $errors['ssd_users']['email'] = 'Veuillez renseigner un email';
    }else{
        if (!filter_var($_POST['ssd_users']['email'], FILTER_VALIDATE_EMAIL)){
            $errors['ssd_users']['email'] = 'Veuillez renseigner un email valide';
        }
    }

    if (empty($_POST['id'])){
        $errors['ssd_users']['id'] = 'Veuillez ne pas modifier l\'id';
    }

    if(empty($_POST['date'])){
        $errors['ssd_users']['date'] = 'Veuillez ne pas modifier la date';
    }
}