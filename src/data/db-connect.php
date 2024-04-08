<?php

try {
    $host = 'localhost';
    $dbName = 'ssd_bdd';
    $username = 'root';
    $password = '';

    $dbh = new PDO("mysql:host=$host;dbName=$dbName", $username, $password, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
    // Sélectionner la base de données
    $dbh->exec("USE $dbName");

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit;

}