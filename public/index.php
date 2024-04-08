<?php

// On vérifie en initilisalisant une varibale $page, si dans l'url le paramètre page n'est pas vide, sinon on redirige vers la page index 
// if (!empty ($_GET['page'])) {
//     $page = $_GET['page'];
// } else {
//     $page = 'index';
// }
// Version ternaire 
$page = !empty ($_GET["page"]) ? $_GET["page"] : 'index';

//On initialise la variable $path pour le chemin vers la page correspondante

$path = '../src/pages/' . $page . '.php';

// On vérifie si la page correspondante existe

if (file_exists($path)) {

    //On inclus le script de connexion à la BDD ainsi que les variables globales
    session_start();
    require '../src/data/db-connect.php';

    //On inclus la variable $path pour accéder à la page correspondante

    require $path;

    //On inclus le layout qui contient la page html correspondante

    require '../templates/layout.html.php';
} else {

    //Si la page n'existe pas on redirige vers la page ERREUR 404
    header('HTTP/1.1 404 Not Found');
    require '../templates/404.html.php';
    exit();
}