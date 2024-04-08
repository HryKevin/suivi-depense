<?php

if(empty($_SESSION['user'])){
    header("Location: /?page=connexion");
};


$title = 'Accueil';
$description = "Description page d'accueil";



